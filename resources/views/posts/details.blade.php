@extends('layouts/app')
@section('content')
@section('title', '相談内容の詳細 | 育児に向き合うパパ達のQ&Aサイト')
<div class="container">
  <div class="row justify-content-center mb-5">
      <div class="col-md-8 mb-3">
          <div class="card">
              <div class="card-haeder p-3 w-100 d-flex">
                  <img src="{{ asset('storage/profile_image/' .$post->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                  <div class="ml-2 d-flex flex-column">
                      <a href="{{ url('users/show/' .$post->user->id) }}" class="text-secondary">{{ $post->user->screen_name }}</a>
                  </div>
                  <div class="d-flex justify-content-end flex-grow-1">
                      <p class="mb-0 text-secondary">{{ $post->created_at->format('Y-m-d H:i') }}</p>
                  </div>
              </div>
              <div class="card-body">
                <h3 class="border-bottom border-dark">
                    {!! nl2br(e($post->title)) !!}<br>
                </h3>
                <h5>
                    {!! nl2br(e($post->content)) !!}
                </h5>
              </div>
              <div class="card-footer py-1 d-flex justify-content-end bg-white">
                  @if ($post->user->id === Auth::user()->id)
                      <div class="dropdown mr-3 d-flex align-items-center">
                          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <form method="POST" action="{{ url('posts/' .$post->id) }}" class="mb-0">
                                  @csrf
                                  @method('DELETE')

                                  <button type="button" class="dropdown-item btn btn btn-outline-info btn-block" data-toggle="modal" data-target="#postEditModal" onclick="edit({{ $post->id }}, '{{ $post->title }}', '{{ $post->content }}')">編集</button>
                                  
                                  <button type="submit" class="dropdown-item del-btn">削除</button>
                              </form>
                          </div>
                      </div>
                  @endif
                  <div class="d-flex align-items-center">
                      @if (!in_array($user->id, array_column($post->favorites->toArray(), 'user_id'), TRUE))
                        <form method="POST" action="{{ url('favorites/') }}" class="mb-0">
                            @csrf

                            <button type="submit" class="btn p-0 border-0 bg-white">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.565 20.565 0 008 13.393a20.561 20.561 0 003.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.75.75 0 01-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5zM8 14.25l-.345.666-.002-.001-.006-.003-.018-.01a7.643 7.643 0 01-.31-.17 22.075 22.075 0 01-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.08 22.08 0 01-3.744 2.584l-.018.01-.006.003h-.002L8 14.25zm0 0l.345.666a.752.752 0 01-.69 0L8 14.25z"></path></svg>
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ url('favorites/' .array_column($post->favorites->toArray(), 'id', 'user_id')[$user->id]) }}" class="mb-0">
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
                    <p class="mb-0 text-secondary">{{ count($post->favorites) }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-8 mb-3">
          <ul class="list-group">
              @forelse ($comments as $comment)
                  <li class="list-group-item">
                      <div class="py-3 w-100 d-flex">
                          <img src="{{ asset('storage/profile_image/' .$comment->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                          <div class="ml-2 d-flex flex-column">
                              <p class="mb-0">{{ $comment->user->name }}</p>
                              <a href="{{ url('users/show/' .$comment->user->id) }}" class="text-secondary">{{ $comment->user->screen_name }}</a>
                          </div>
                          <div class="d-flex justify-content-end flex-grow-1">
                              <p class="mb-0 text-secondary">{{ $comment->created_at->format('Y-m-d H:i') }}</p>
                          </div>
                      </div>
                      <div class="py-3">
                          {!! nl2br(e($comment->text)) !!}
                      </div>
                  </li>
              @empty
                  <li class="list-group-item">
                      <p class="mb-0 text-secondary">コメントはまだありません。</p>
                  </li>
              @endforelse
              <li class="list-group-item">
                    <div class="py-3">
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf

                            <div class="form-group row mb-0">
                                <div class="col-md-12 p-3 w-100 d-flex">
                                    <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
                                    <div class="ml-2 d-flex flex-column">
                                        <p class="mb-0">{{ $user->name }}</p>
                                        <a href="{{ url('users/' .$user->id) }}" class="text-seconsary">{{ $user->screen_name }}</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <textarea class="form-control @error('text') is-invalid @enderror" name="text" required autocomplete="text" rows="4">{{ old('text') }}</textarea>
                                    
                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        返信
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
              </li>
          </ul>
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
                  <p class="mb-0">{{ $user->name }}</p>
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
              <div class="">
                <label for="postModalTag"><strong class="lead">タグを選択</strong><span class="text-muted">※タグは10個まで選択可能</span></label>
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
</div>
@endsection