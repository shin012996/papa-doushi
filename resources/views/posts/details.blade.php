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
                      <p class="mb-0">{{ $post->user->name }}</p>
                      <a href="{{ url('posts/' .$post->user->id) }}" class="text-secondary">{{ $post->user->screen_name }}</a>
                  </div>
                  <div class="d-flex justify-content-end flex-grow-1">
                      <p class="mb-0 text-secondary">{{ $post->created_at->format('Y-m-d H:i') }}</p>
                  </div>
              </div>
              <div class="card-body">
                  {!! nl2br(e($post->text)) !!}
              </div>
              <div class="card-footer py-1 d-flex justify-content-end bg-white">
                  @if ($post->user->id === Auth::user()->id)
                      <div class="dropdown mr-3 d-flex align-items-center">
                          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M8 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM1.5 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm13 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg></span>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <form method="POST" action="{{ url('posts/' .$post->id) }}" class="mb-0">
                                  @csrf
                                  @method('DELETE')

                                  <div class="nav-item p-3">
                                    <!-- 切り替えボタンの設定 -->
                                    <button type="button" class="btn btn-outline-info text-dark" data-toggle="modal" data-target="#postModal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path></svg>編集</button>
                                  
                                    <!-- モーダルの設定 -->
                                    <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" data-backdrop="static">
                                      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="postModalLabel">相談内容の編集</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>                               
                                                                    
                                          <form action="/posts/update" method="POST" name="soudan">
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
                                                  <label for="postModalTitle"> <strong class="lead">タイトル</strong> <span class="text-muted">※30文字以内</span></label>
                                                  <input type="text" class="form-control" name="title" id="title">
                                                </div>
                                                <div class="form-group">
                                                  <label for="postModalTextarea"> <strong class="lead">本文</strong></label>
                                                  <textarea class="form-control rounded-0" id="content" rows="10" name="content"></textarea>
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
                                  <button type="submit" class="dropdown-item del-btn">削除</button>
                              </form>
                          </div>
                      </div>
                  @endif
                  <div class="mr-3 d-flex align-items-center">
                      <a href="{{ url('posts/' .$post->id) }}"><i class="far fa-comment fa-fw"></i></a>
                      <p class="mb-0 text-secondary">{{ count($post->comments) }}</p>
                  </div>
                  <div class="d-flex align-items-center">
                      <button type="" class="btn p-0 border-0 text-primary"><i class="far fa-heart fa-fw"></i></button>
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
                              <a href="{{ url('papa-doushi/' .$comment->user->id) }}" class="text-secondary">{{ $comment->user->screen_name }}</a>
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
          </ul>
      </div>
  </div>
</div>
@endsection