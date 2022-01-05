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
           'title' => 'required|max:50',
           'content' => 'required|max:2000',
       ]);

        // #(ハッシュタグ)で始まる単語を取得。結果は、$matchに多次元配列で代入される。
        preg_match_all('/#([a-zA-z0-9０-９ぁ-んァ-ヶ亜-熙]+)/u', $request->tags, $match);

        // $match[0]に#(ハッシュタグ)あり、$match[1]に#(ハッシュタグ)なしの結果が入ってくるので、$match[1]で#(ハッシュタグ)なしの結果のみを使います。
        $tags = [];
        foreach ($match[1] as $tag) {
            $record = Tag::firstOrCreate(['name' => $tag]); // firstOrCreateメソッドで、tags_tableのnameカラムに該当のない$tagは新規登録される。
            array_push($tags, $record); // $recordを配列に追加します(=$tags)
        };

        // 投稿に紐付けされるタグのidを配列化
        $tags_id = [];
        foreach ($tags as $tag) {
            array_push($tags_id, $tag['id']);
        };
        
        $post = new Post();
        $post->user_id = $user = auth()->user()->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->is_solved = false;
        $post->tags()->attach($tags_id);// 投稿ににタグ付するために、attachメソッドをつかい、モデルを結びつけている中間テーブルにレコードを挿入します。
        $post->save();
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
