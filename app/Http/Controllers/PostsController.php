<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Post;
use App\Models\Follower;
use App\Models\Favorite;
use App\Models\Comment;

class PostsController extends Controller
{
    public function index(Post $post, Follower $follower)
    {
        $user = auth()->user();
        $follow_ids = $follower->followingIds($user->id);
        // followed_idだけ抜き出す
        $following_ids = $follow_ids->pluck('followed_id')->toArray();

        $timelines = $post->getTimelines($user->id, $following_ids);

        return view('posts.index', [
            'user'      => $user,
            'timelines' => $timelines
        ]);
    }

    // 投稿の詳細画面
    public function details(Post $post, Comment $comment, Follower $follower)
    {
        $user = auth()->user();
        $post = $post->getPost($post->id);
        $comments = $comment->getComments($post->id);

        $follow_ids = $follower->followingIds($user->id);
        // followed_idだけ抜き出す
        $following_ids = $follow_ids->pluck('followed_id')->toArray();

        // $timelines = $post->getTimelines($user->id, $following_ids);

        return view('posts.details', [
            'user'     => $user,
            'post' => $post,
            'comments' => $comments
            // 'timelines' => $timelines,
            // 'timeline' => $timeline
            
        ]);
    }

    // モーダルの投稿機能
    public function store(Request $request, User $user)
    {
       $validatedData = $request->validate([
           'title' => 'required|max:30',
           'content' => 'required',
       ]);
        $post = new Post();
        $post->user_id = $user = auth()->user()->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->is_solved = false;
        $post->save();
        // $post->;
        return redirect('/posts');
    }

    // 投稿編集機能
    public function edit(Post $post)
    {
        $user = auth()->user();
        $posts = $posts->getEditPost($user->id, $post->id);

        if (!isset($posts)) {
            return redirect('posts');
        }

        return view('posts.edit', [
            'user'  => $user,
            'posts' => $posts
        ]);
    }

    // 投稿更新処理
    public function update()
    {

    }
}
