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
                  <form class="form-inline justify-content-center">
                    <div class="d-flex">
                      <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
                      <button type="submit" class="btn btn-outline-info"><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>             
                      </a></button>
                    </div>
                  </form>
                </div>
                <a class="text-dark" href="{{ url('users/') }}">
                  ユーザ一覧
                  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><rect fill="none" height="24" width="24"/><g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/></g></svg>
                </a>
              </div>
              <div class="card-body col-12 p-0">
                @if (isset($timelines))
                    @foreach ($timelines as $timeline)
                    <div class="questionList card d-flex flex-row mb-5">
                      <div class="questionList-right col-2 p-0 pl-2">
                        <div class="p-3">
                          @if ($timeline->is_solved == 0)
                          <form action=""></form>
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
                            <div class="card-footer py-1 d-flex justify-content-end bg-white">
                              @if ($timeline->user->id === Auth::user()->id)
                                <div class="dropdown mr-3 d-flex align-items-center">
                                  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <form method="POST" action="{{ url('posts/' .$timeline->id) }}" class="mb-0">
                                      @csrf
                                      @method('DELETE')
                                      
                                      <button type="button" class="dropdown-item btn btn btn-outline-info btn-block" data-toggle="modal" data-target="#postEditModal" onclick="edit({{ $timeline->id }}, '{{ $timeline->title }}', '{{ $timeline->content }}')">編集</button>                                                                                        
                                      <button type="submit" class="dropdown-item btn-block">削除</button>
                                    </form>
                                  </div>
                                </div>
                              @endif
                                <div class="mr-3 d-flex align-items-center">
                                    <a href="{{ url('posts/details/' .$timeline->id) }}">
                                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                  @if (!in_array($user->id, array_column($timeline->favorites->toArray(), 'user_id'), TRUE))
                                    <form method="POST" action="{{ url('favorites/') }}" class="mb-0">
                                      @csrf
      
                                      <input type="hidden" name="post_id" value="{{ $timeline->id }}">
                                      <button class="btn p-0 border-0 bg-white text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.565 20.565 0 008 13.393a20.561 20.561 0 003.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.75.75 0 01-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5zM8 14.25l-.345.666-.002-.001-.006-.003-.018-.01a7.643 7.643 0 01-.31-.17 22.075 22.075 0 01-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.08 22.08 0 01-3.744 2.584l-.018.01-.006.003h-.002L8 14.25zm0 0l.345.666a.752.752 0 01-.69 0L8 14.25z"></path></svg>
                                      </button>
                                    </form>
                                  @else
                                    <form method="POST" action="{{ url('favorites/' .array_column($timeline->favorites->toArray(), 'id', 'user_id')[$user->id]) }}" class="mb-0">
                                      @csrf
                                      @method('DELETE')
      
                                      <button type="submit" class="btn p-0 border-0 bg-white text-danger">
                                        <svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve">
                                          <style type="text/css">
                                            .st0{fill:#374149;}
                                          </style>
                                          <g>
                                            <path class="st0" d="M248.787,476.68c1.654,2.676,4.334,4.253,7.246,4.253c2.838,0,5.514-1.577,7.168-4.253
                                              c14.729-24.731,55.207-58.203,102.07-97.033c18.901-15.67,38.514-31.818,57.807-48.593
                                              c76.474-66.552,105.538-143.972,79.703-212.408c-19.135-50.801-66.786-87.58-113.41-87.58h-0.392
                                              c-70.198,0.3-115.895,48.058-131.262,66.286c-0.688,0.8-1.407,1.631-2.018,2.362c-12.622-16.09-59.318-68.333-132.686-68.648
                                              h-0.315c-46.705,0-94.352,36.779-113.491,87.58c-25.831,68.436,3.307,145.856,79.704,212.408
                                              c19.294,16.774,38.906,32.922,57.807,48.593C193.58,418.477,234.059,451.949,248.787,476.68z M74.451,208.557
                                              c-2.711,5.753-5.288,11.598-7.572,17.632c-16.802-30.915-20.324-61.353-9.868-89.272c12.759-34.184,40.167-52.77,65.606-54.658
                                              c19.87-1.511,37.168,5.568,51.343,13.71c0.154,0.092,0.315,0.177,0.469,0.269c0.511,0.296,0.985,0.6,1.488,0.896
                                              c1.412,0.862,2.796,1.723,4.115,2.573c-18.005,9.053-35.068,20.532-50.643,34.53C105.646,155.576,87.361,180.876,74.451,208.557z" style="fill: rgb(223, 86, 86);"></path>
                                          </g>
                                          </svg>
                                      </button>
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
              {{ $timelines->links() }}
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
              <label for="editTitle"> <strong class="lead">タイトル</strong> <span class="text-muted">※30文字以内</span></label>
              <input type="text" class="form-control" name="title" id="editTitle">
            </div>
            <div class="form-group">
              <label for="editContent"> <strong class="lead">本文</strong></label>
              <textarea class="form-control rounded-0" id="editContent" rows="10" name="content"></textarea>
            </div>
            <div class="form-group">
              <label for="editTag"><strong class="lead">タグを選択</strong><span class="text-muted">※タグは10個まで選択可能</span></label>
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