<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use App\Models\User;
use App\Models\Post;
use App\Models\Follower;
use App\Models\Favorite;
use App\Models\Comment;

class PostsController extends Controller
{
    public function index(Post $post, Follower $follower, Request $request)
    {
        $category = $request->category ?: 'new';
        $keyword = $request->keyword ?: '';
        $user_keyword = $request->user_keyword ?: '';
        $tags_keyword = $request->tags_keyword ?: '';

        $user = auth()->user();
        $query = Post::query();
        if($category == 'new') {
            $query->orderBy('id', 'DESC');
        } elseif($category == 'follow') {
            $follow_ids = $follower->followingIds($user->id);
            $follow_ids[] = $user->id;
            $query->whereIn('user_id', $follow_ids)->orderBy('id', 'DESC');
        } elseif($category == 'unanswered') {
            $query->where('comment_count', '=', 0)->orderBy('id', 'DESC');
        } elseif($category == 'unresolved') {
            $query->where('is_solved', '=', 0)->orderBy('id', 'DESC');
        } elseif($category == 'solved') {
            $query->where('is_solved', '=', 1)->orderBy('id', 'DESC');
        }

        if ($keyword != '') {
            $query->where('title', 'like', "%$keyword%");
        }

        if ($user_keyword != '') {
            $query->whereHas('User', function($q) use($user_keyword){
                $q->where('screen_name', 'like', "%$user_keyword%");
            });
        }

        if ($tags_keyword != '') {
            $query->whereHas('Tags', function($q) use($tags_keyword){
                $q->where('name', 'like', "%$tags_keyword%");
            });
        }

        $timelines = $query->paginate(15);


        return view('posts.index', [
            'user'      => $user,
            'timelines' => $timelines,
            'category' => $category,
            'keyword' => $keyword,
            'user_keyword' => $user_keyword,
            'tags_keyword' => $tags_keyword
        ]);
    }

    // 投稿の詳細画面
    public function details(Post $post, Comment $comment)
    {
        $user = auth()->user();
        $post = $post->getPost($post->id);
        $comments = $comment->getComments($post->id);

        return view('posts.details', [
            'user'     => $user,
            'post' => $post,
            'comments' => $comments
            
        ]);
    }

    // モーダルの投稿機能
    public function store(Request $request, Post $post)
    {
        $user = auth()->user();
        $data = $request->all();

        $validator = Validator::make($data, [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:2000']
        ]);
        $validator->validate();

       $tags = [];
       foreach ($request->tags as $tag) {
           $record = Tag::firstOrCreate(['name' => $tag]);
           array_push($tags, $record);
       }

       $tags_id = [];
        foreach ($tags as $tag) {
            array_push($tags_id, $tag['id']);
        };


        
        $post = new Post();
        $post->user_id = $user = auth()->user()->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->comment_count = 0;
        $post->is_solved = 0;
        $post->save();
        $post->tags()->attach($tags_id);
        return redirect('/posts');
    }

    // 投稿編集機能
    public function edit(Post $post)
    {
        $user = auth()->user();
        $posts = $post->getEditPost($user->id, $post->id);

        if (!isset($posts)) {
            return redirect('/posts');
        }

        return view('posts.edit', [
            'user'  => $user,
            'posts' => $posts
        ]);
    }

    // 投稿更新処理
    public function update(Post $post)
    {
        $post = Post::find($post->id);
        if($post->is_solved == false){
            $post->is_solved++;
        } else {
            $post->is_solved--;
        };
        $post->save();

        return back();
    }

    // 投稿機能の削除
    public function destroy(Post $post)
    {
        $post = Post::findOrFail($post->id);
        $post->delete();

        return redirect('/posts');
    }
}
