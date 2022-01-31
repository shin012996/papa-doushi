@extends('layouts/app')
@section('content')
@section('title', 'パパドウシ | 育児に向き合うパパ達のQ&Aサイト')
<div class="cp_qa">
  <input id="cp_conttab1" class="conttabs" type="radio" name="tabs" @if($category == 'new') checked @endif>
  <a href="/posts?category=new" class="cp_tabitem" for="cp_conttab1">
      <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><g><rect fill="none" height="24" width="24" x="0"/></g><g><g><g><path d="M20,4H4C2.89,4,2.01,4.89,2.01,6L2,18c0,1.11,0.89,2,2,2h16c1.11,0,2-0.89,2-2V6C22,4.89,21.11,4,20,4z M8.5,15H7.3 l-2.55-3.5V15H3.5V9h1.25l2.5,3.5V9H8.5V15z M13.5,10.26H11v1.12h2.5v1.26H11v1.11h2.5V15h-4V9h4V10.26z M20.5,14 c0,0.55-0.45,1-1,1h-4c-0.55,0-1-0.45-1-1V9h1.25v4.51h1.13V9.99h1.25v3.51h1.12V9h1.25V14z"/></g></g></g></svg>  新着
  </a>
  <input id="cp_conttab2" class="conttabs" type="radio" name="tabs" @if($category == 'follow') checked @endif>
  <a href="/posts?category=follow" class="cp_tabitem" for="cp_conttab2">
      <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M16.48,10.41c-0.39,0.39-1.04,0.39-1.43,0l-4.47-4.46l-7.05,7.04l-0.66-0.63c-1.17-1.17-1.17-3.07,0-4.24l4.24-4.24 c1.17-1.17,3.07-1.17,4.24,0L16.48,9C16.87,9.39,16.87,10.02,16.48,10.41z M17.18,8.29c0.78,0.78,0.78,2.05,0,2.83 c-1.27,1.27-2.61,0.22-2.83,0l-3.76-3.76l-5.57,5.57c-0.39,0.39-0.39,1.02,0,1.41c0.39,0.39,1.02,0.39,1.42,0l4.62-4.62l0.71,0.71 l-4.62,4.62c-0.39,0.39-0.39,1.02,0,1.41c0.39,0.39,1.02,0.39,1.42,0l4.62-4.62l0.71,0.71l-4.62,4.62c-0.39,0.39-0.39,1.02,0,1.41 c0.39,0.39,1.02,0.39,1.41,0l4.62-4.62l0.71,0.71l-4.62,4.62c-0.39,0.39-0.39,1.02,0,1.41c0.39,0.39,1.02,0.39,1.41,0l8.32-8.34 c1.17-1.17,1.17-3.07,0-4.24l-4.24-4.24c-1.15-1.15-3.01-1.17-4.18-0.06L17.18,8.29z"/></g></svg> フォロー
  </a>
  <input id="cp_conttab3" class="conttabs" type="radio" name="tabs" @if($category == 'unanswered') checked @endif>
  <a href="/posts?category=unanswered"  class="cp_tabitem" for="cp_conttab3">
      <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-4 6V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1z"/></svg> 未回答
  </a>
  <input id="cp_conttab4" class="conttabs" type="radio" name="tabs" @if($category == 'unresolved') checked @endif>
  <a href="/posts?category=unresolved"  class="cp_tabitem" for="cp_conttab4">
      <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11.07,12.85c0.77-1.39,2.25-2.21,3.11-3.44c0.91-1.29,0.4-3.7-2.18-3.7c-1.69,0-2.52,1.28-2.87,2.34L6.54,6.96 C7.25,4.83,9.18,3,11.99,3c2.35,0,3.96,1.07,4.78,2.41c0.7,1.15,1.11,3.3,0.03,4.9c-1.2,1.77-2.35,2.31-2.97,3.45 c-0.25,0.46-0.35,0.76-0.35,2.24h-2.89C10.58,15.22,10.46,13.95,11.07,12.85z M14,20c0,1.1-0.9,2-2,2s-2-0.9-2-2c0-1.1,0.9-2,2-2 S14,18.9,14,20z"/></g></svg> 未解決
  </a>
  <input id="cp_conttab5" class="conttabs" type="radio" name="tabs" @if($category == 'solved') checked @endif>
  <a href="/posts?category=solved"  class="cp_tabitem" for="cp_conttab5">
      <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 解決済
  </a>
  <div id="cp_content">
    <div class="cp_qain">
      <div class="cp_actab">
        <input id="cp_tabfour051" class="conttabs" type="checkbox" name="tabs">
        <div class="container col-12">
          <div class="row justify-content-center">
            <div class="card col-md-8 mb-3 text-right p-0">
              <div class="card-header">
                <!-- 検索バー -->
                <div class="form-group">
                  <form class="form-inline justify-content-center" action="{{ url('/posts') }}">
                    <div class="d-flex">
                      <input class="form-control" type="text" name="keyword" value="{{ $keyword }}"  placeholder="タイトル" aria-label="Search">
                      <input class="form-control" type="text" name="tags_keyword" value="{{ $tags_keyword }}"  placeholder="タグ" aria-label="Search">
                      <input class="form-control" type="text" name="user_keyword" value="{{ $user_keyword }}"  placeholder="ユーザー名" aria-label="Search">
                      <button type="submit" class="btn btn-outline-info"><a href="#"><i class="fas fa-search"></i></a></button>
                    </div>
                  </form>
                </div>
                <a class="text-dark" href="{{ url('users/') }}">ユーザ一覧<i class="fas fa-users"></i></a>
              </div>
              <div class="card-body col-12 p-0">
                @if (isset($timelines))
                    @foreach ($timelines as $timeline)
                    <div class="questionList card d-flex flex-row mb-5">
                      <div class="questionList-right col-2 p-0 pl-2">
                        <div class="p-3">
                          @if ($timeline->is_solved == 0)
                          <button class="is_solved-lavel btn-lg btn-secondary" disabled><strong>受付中</strong></button>
                          @else
                          <button class="is_solved-lavel btn-lg btn-danger" disabled><strong>解決済</strong></button>
                          @endif
                        </div>
                        <p class="ans-counter d-flex flex-column">
                          <span class="ans-count-num">{{ count($timeline->comments) }}</span>
                          <span class="ans-count-label"><strong>回答</strong></span>
                        </p>
                      </div>
                        <div class="questionList-left col-10 p-0">
                            <div class="card-haeder p-3 w-100 d-flex">
                              <img src="{{ asset('storage/profile_image/' .$timeline->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                              <div class="ml-2 d-flex flex-column">
                                  <a href="{{ url('users/show/' .$timeline->user->id) }}" class="text-secondary">{{ $timeline->user->screen_name }}</a>
                              </div>
                              <div class="d-flex justify-content-end flex-grow-1">
                                  <p class="mb-0 text-secondary">{{ $timeline->created_at->format('Y-m-d H:i') }}</p>
                              </div>
                            </div>
                            <div class="card-body">
                              <h3 class="title-layouts">
                                <a class="text-dark" href="{{ url('posts/details/' .$timeline->id) }}">
                                  {!! nl2br(e($timeline->title)) !!}
                                </a>
                              </h3>
                            </div>
                            <div class="row"> 
                              @foreach ($timeline->tags as $tag)
                                <div class="justify-content-start">
                                  <a href="/posts?tags_keyword={{ $tag->name }}" class="btn btn-sm btn-info text-white">
                                    {{ $tag->name }}
                                  </a> 
                                </div>
                              @endforeach
                            </div>
                            <div class="card-footer py-1 d-flex justify-content-end bg-white">
                              @if ($timeline->user->id === Auth::user()->id)
                                <div class="dropdown mr-3 d-flex align-items-center">
                                  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <button type="button" class="dropdown-item btn btn btn-outline-info btn-block" data-toggle="modal" data-target="#postEditModal" onclick="edit('{{ $timeline->id }}', '{{ $timeline->title }}', '{{ $timeline->content }}')">編集</button>                                                                                        
                                    <form method="POST" action="{{ url('posts/destroy/' .$timeline->id) }}" class="mb-0" id="form_{{ $timeline->id }}">
                                      @csrf
                                      @method('DELETE')
                                      
                                      <button type="submit" class="dropdown-item btn-block" onclick="deletePost(this);">削除</button>
                                    </form>
                                  </div>
                                </div>
                              @endif
                                <div class="mr-3 d-flex align-items-center">
                                    <a href="{{ url('posts/details/' .$timeline->id) }}">
                                      <i class="far fa-comments"></i>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                  @if (!in_array($user->id, array_column($timeline->favorites->toArray(), 'user_id'), TRUE))
                                    <form method="POST" action="{{ url('favorites/') }}" class="mb-0">
                                      @csrf
      
                                      <input type="hidden" name="post_id" value="{{ $timeline->id }}">
                                      <button class="btn p-0 border-0 bg-white text-primary"><i class="far fa-heart"></i></button>
                                    </form>
                                  @else
                                    <form method="POST" action="{{ url('favorites/' .array_column($timeline->favorites->toArray(), 'id', 'user_id')[$user->id]) }}" class="mb-0">
                                      @csrf
                                      @method('DELETE')
      
                                      <button type="submit" class="btn p-0 border-0 bg-white text-danger"><i class="fas fa-heart"></i></button>
                                    </form>
                                  @endif
                                </div>
                              </div>
                          </div>
                      </div>
                    @endforeach
                @endif
              </div>
            </div>
          </div>
          <div class="my-4 d-flex justify-content-center">
              {{$timelines->appends(['keyword' => $keyword, 'category' => $category])->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- モーダルの設定 -->
<div class="modal fade" id="postEditModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">相談内容の編集</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>                                                                                  

      <form action="/posts/post/update" method="POST" name="hensyu">
        @csrf
        @method('PUT')

        <div class="col-md-12 p-3 w-100 d-flex"> <!-- プロフィール -->
            <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
            <div class="ml-2 d-flex flex-column">
                <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
            </div>
        </div>

        <div class="modal-body">
            <div class="form-group">
              <label for="editTitle"> <strong class="lead">タイトル</strong></label>
              <input type="text" class="form-control" id="editTitle" name="title">
            </div>
            <div class="form-group">
              <label for="editContent"> <strong class="lead">本文</strong></label>
              <textarea class="form-control rounded-0" id="editContent" rows="10" name="content"></textarea>
            </div>
            <div class="form-group">
              <label for="editTag"><strong class="lead">タグを選択</strong></label>
              <input type="text" class="form-control{{ $errors->has('editTag') ? 'is-invalid' : '' }}" id="editTag" name="editTag" value="{{ old('editTag') }}" >
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            <button type="button" class="btn btn-primary" onclick="check()">相談する</button>
          </div><!-- /.modal-footer -->
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection