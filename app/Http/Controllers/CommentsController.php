<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Comment;

class CommentsController extends Controller
{
   public function store(Request $request, Comment $comment, Post $post)
   {
       $user = auth()->user();
       $data = $request->all();
       $validator = Validator::make($data, [
           'post_id' => ['required', 'integer'],
           'text' => ['required', 'string']
       ]);

       $validator->validate();
       $comment->commentStore($user->id, $data);

       $post = Post::find($comment->post_id);
       $post->comment_count++;
       $post->save();

       return back();
   }
}
