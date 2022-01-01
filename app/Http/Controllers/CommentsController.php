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

class CommentsController extends Controller
{
   public function store(Request $request, Comment $comment)
   {
       $user = auth()->user();
       $data = $request->all();
       $validator = Validator::make($data, [
           'post_id' => ['required', 'integer'],
           'text' => ['required', 'string']
       ]);

       $validator->validate();
       $comment->commentStore($user->id, $data);

       return back();
   }
}
