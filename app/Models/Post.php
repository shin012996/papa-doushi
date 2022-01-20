<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    use SoftDeletes;

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

    // 一覧画面(新着順)
    public function getTimeLinesByNew()
    {
        return $this->orderBy('created_at', 'DESC')->paginate(15);
    }

    // 一覧画面(フォロー)
    public function getTimeLinesByFollow(Int $user_id, Array $follow_ids)
    {
        // 自身とフォローしているユーザIDを結合する
        $follow_ids[] = $user_id;
        return $this->whereIn('user_id', $follow_ids)->orderBy('created_at', 'DESC')->paginate(15);
    }

    // 一覧画面(未回答)
    public function getTimeLinesByUnAnswered()
    {
        return $this->where('comment_count', '=', 0)->orderBy('created_at', 'DESC')->paginate(15);
    }

    // 一覧画面(未解決)
    public function getTimeLinesByUnSolved()
    {
        return $this->where('is_solved', '=', 0)->orderBy('created_at', 'DESC')->paginate(15);
    }

    // 一覧画面(解決済)
    public function getTimeLinesBySolved()
    {
        return $this->where('is_solved', '=', 1)->orderBy('created_at', 'DESC')->paginate(15);
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
