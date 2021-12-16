<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Post;
use App\Models\Follower;

class PapaDoushiController extends Controller
{
    public function index()
    {
        return view('papa-doushi.index');
    }

    public function help()
    {
        return view('papa-doushi.help');
    }

    public function about()
    {
        return view('papa-doushi.about');
    }

    public function userList(User $user)
    {
        $all_users = $user->getAllUsers(auth()->user()->id);
        return view('papa-doushi.userList', [
            'all_users' => $all_users
        ]);

    }
 
     // 新規Post入力画面
     public function create()
     {
         //
     }
 
     // 新規Post処理
     public function store(Request $request)
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
         return redirect('/papa-doushi');
     }
 
     // ユーザ詳細画面
     public function show(User $user, Post $post, Follower $follower)
     {
         $login_user = auth()->user();
         $is_following = $login_user->isFollowing($user->id);
         $is_followed = $login_user->isFollowed($user->id);
         $timelines = $post->getUserTimeLine($user->id);
         $post_count = $post->getPostCount($user->id);
         $follow_count = $follower->getFollowCount($user->id);
         $follower_count = $follower->getFollowerCount($user->id);
        

         return view('papa-doushi.show', [
            'user'           => $user,
            'is_following'   => $is_following,
            'is_followed'    => $is_followed,
            'timelines'      => $timelines,
            'post_count'    => $post_count,
            'follow_count'   => $follow_count,
            'follower_count' => $follower_count
         ]);
     }
 
     // Post編集画面
     public function edit(User $user)
     {
         return view('papa-doushi.edit', ['user' => $user]);
     }
 
     // Post編集処理
     public function update(Request $request, User $user)
     {
         $data = $request->all();
         $validator = Validator::make($data, [
            'screen_name'   => ['required', 'string', 'max:50', Rule::unique('users')->ignore($user->id)],
            'name'          => ['required', 'string', 'max:255'],
            'profile_image' => ['file', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'email'         => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)]
         ]);
         $validator->validate();
         $user->updateProfile($data);

         return redirect('papa-doushi/' .$user->id);
     }

     public function updateProfile(Array $params)
     {
         if(isset($params['profile_image'])) {
             $file_name = $params['profile_image']->store('public/profile_image');

             $this::where('id', $this->id)
                ->update([
                    'screen_name'   => $params['screen_name'],
                    'name'          => $params['name'],
                    'profile_image' => basename($file_name),
                    'email'         => $params['email'],
                ]);
         } else {
             $this::where('id', $this->id)
                ->update([
                    'screen_name'   => $params['screen_name'],
                    'name'          => $params['name'],
                    'email'         => $params['email'],
                ]);
         }

         return;
     }
 
     // Post削除処理
     public function destroy($id)
     {
         //
     }

     // フォロー
     public function follow(User $user)
     {
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($user->id);
        if(!$is_following) {
            // フォローしていなければフォローする
            $follower->follow($user->id);
            return back();
        }
     }

     // フォロー解除
     public function unfollow(User $user)
     {
         $follower = auth()->user();
         // フォローしているか
         $is_following = $follower->isFollowing($user->id);
         if($is_following) {
             // フォローしていればフォローを解除する
             $follower->unfollow($user->id);
             return back();
         }
     }

}
