<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getUserTimeLine(Int $user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'DESC')->paginate(50);
    }

    // 投稿数のカウント
    public function getPostCount(Int $user_id)
    {
        return $this->where('user_id', $user_id)->count();
    }


    // 詳細画面
    public function getPost(Int $post_id)
    {
        return $this->with('user')->where('id', $post_id)->first();
    }

    // 投稿編集画面
    public function getEditPost(Int $user_id, Int $post_id)
    {
        return $this->where('user_id', $user_id)->where('id', $post_id)->first();
    }

    // タグ
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
