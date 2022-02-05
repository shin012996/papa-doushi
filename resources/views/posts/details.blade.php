@extends('layouts/app')
@section('content')
@section('title', '相談内容の詳細 | 育児に向き合うパパ達のQ&Aサイト')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <div class="card-haeder p-3 w-100 d-flex">
                    @if($post->user->profile_image == null)
                        <img src="{{ asset('img/no-image.png') }}" class="rounded-circle" width="50" height="50">
                    @else
                        <img src="{{ asset('storage/profile_image/' .$post->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                    @endif
                    <div class="ml-2 d-flex flex-column">
                        <a href="{{ url('users/show/' .$post->user->id) }}" class="text-secondary">{{ $post->user->screen_name }}</a>
                    </div>
                    <div class="d-flex justify-content-between">
                        @if ($post->user->id === Auth::user()->id)
                            @if($post->is_solved == false)
                            <form method="POST" action="{{ url('posts/update/' .$post->id) }}">
                                @csrf

                                <button type="submit" class="btn btn-sm btn-danger ml-5">解決</button>
                            </form>
                            @else
                            <form method="POST" action="{{ url('posts/update/' .$post->id) }}">
                                @csrf

                                <button type="submit" name="notSolved" class="btn btn-sm btn-secondary ml-5">未解決</button>
                            </form>
                            @endif
                        @endif
                    </div>
                    <div class="d-flex justify-content-end flex-grow-1">
                        <p class="mb-0 text-secondary">{{ $post->created_at->format('Y-m-d H:i') }}</p>
                    </div>
                </div>
              <div class="card-body">
                  <div class="card-title">
                      <h3>{!! nl2br(e($post->title)) !!}</h3>
                  </div>
                  <div class="card-text">
                      <h5 class="details-text">{!! nl2br(e($post->content)) !!}</h5>
                  </div>
              </div>
              <div class="card-footer py-1 d-flex justify-content-end bg-white">
                  @if ($post->user->id === Auth::user()->id)
                      <div class="dropdown mr-3 d-flex align-items-center">
                          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <button type="button" class="dropdown-item btn btn btn-outline-info btn-block" data-toggle="modal" data-target="#postEditModal" onclick="edit('{{ $post->id }}', '{{ $post->title }}', '{{ $post->content }}')">編集</button>

                                <form method="POST" action="{{ url('posts/destroy/' .$post->id) }}" class="mb-0" id="form_{{ $post->id }}">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="dropdown-item btn-block" onclick="deletePost(this);">削除</button>
                                </form>
                          </div>
                      </div>
                  @endif
                  <div class="d-flex align-items-center">
                      @if (!in_array($user->id, array_column($post->favorites->toArray(), 'user_id'), TRUE))
                        <form method="POST" action="{{ url('favorites/') }}" class="mb-0">
                            @csrf

                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button class="btn p-0 border-0 bg-white text-primary">
                                <i class="far fa-heart"></i>
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ url('favorites/' .array_column($post->favorites->toArray(), 'id', 'user_id')[$user->id]) }}" class="mb-0">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn p-0 border-0 bg-white text-danger">
                                <i class="fas fa-heart"></i>
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
                        @if($comment->user->profile_image == null)
                            <img src="{{ asset('img/no-image.png') }}" class="rounded-circle" width="50" height="50">
                        @else
                            <img src="{{ asset('storage/profile_image/' .$comment->user->profile_image) }}" class="rounded-circle" width="100" height="100">
                        @endif
                          <div class="ml-2 d-flex flex-column">
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
                                    @if($post->user->profile_image == null)
                                        <img src="{{ asset('img/no-image.png') }}" class="rounded-circle" width="50" height="50">
                                    @else
                                        <img src="{{ asset('storage/profile_image/' .$post->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                                    @endif
                                    <div class="ml-2 d-flex flex-column">
                                        <a href="{{ url('users/show/' .$post->user->id) }}" class="text-secondary">{{ $post->user->screen_name }}</a>
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
                <label for="editTitle"> <strong class="lead">タイトル</strong></label>
                <input type="text" class="form-control" name="title" id="editTitle">
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
</div>
@endsection