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
        
        $user = auth()->user();
        if($category == 'new') {
            $timelines = $post->getTimeLinesByNew();
        } elseif($category == 'follow') {
            $follow_ids = $follower->followingIds($user->id);
            // followed_idだけ抜き出す
            $following_ids = $follow_ids->pluck('followed_id')->toArray();
            $timelines = $post->getTimelinesByFollow($user->id, $following_ids);
        } elseif($category == 'unanswered') {
            $timelines = $post->getTimelinesByUnAnswered($post->id);
        } elseif($category == 'unresolved') {
            $timelines = $post->getTimelinesByUnSolved();
        } elseif($category == 'solved') {
            $timelines = $post->getTimelinesBySolved();
        }

        return view('posts.index', [
            'user'      => $user,
            'timelines' => $timelines,
            'category' => $category,
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
       $record = Tag::firstOrCreate(['name' => $request->tags]);
       array_push($tags, $record);

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
            return redirect('posts');
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
}
