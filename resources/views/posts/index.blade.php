@extends('layouts/app')
@section('content')
@section('title', 'パパドウシ | 育児に向き合うパパ達のQ&Aサイト')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8 mb-3 text-right">
          <a href="{{ url('users/index') }}">ユーザ一覧 <i class="fas fa-users" class="fa-fw"></i> </a>
      </div>
      @if (isset($timelines))
          @foreach ($timelines as $timeline)
              <div class="col-md-8 mb-3">
                  <div class="card">
                      <div class="card-haeder p-3 w-100 d-flex">
                          <img src="{{ asset('storage/profile_image/' .$timeline->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                          <div class="ml-2 d-flex flex-column">
                              <p class="mb-0">{{ $timeline->user->name }}</p>
                              <a href="{{ url('posts/' .$timeline->user->id) }}" class="text-secondary">{{ $timeline->user->screen_name }}</a>
                          </div>
                          <div class="d-flex justify-content-end flex-grow-1">
                              <p class="mb-0 text-secondary">{{ $timeline->created_at->format('Y-m-d H:i') }}</p>
                          </div>
                      </div>
                      <div class="card-body">
                          {!! nl2br(e($timeline->content)) !!}
                      </div>
                      <div class="card-footer py-1 d-flex justify-content-end bg-white">
                          @if ($timeline->user->id === Auth::user()->id)
                              <div class="dropdown mr-3 d-flex align-items-center">
                                  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M8 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM1.5 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm13 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg></span>
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
                              <a href="{{ url('posts/details/' .$timeline->id) }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2.75 2.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h2a.75.75 0 01.75.75v2.19l2.72-2.72a.75.75 0 01.53-.22h4.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25H2.75zM1 2.75C1 1.784 1.784 1 2.75 1h10.5c.966 0 1.75.784 1.75 1.75v7.5A1.75 1.75 0 0113.25 12H9.06l-2.573 2.573A1.457 1.457 0 014 13.543V12H2.75A1.75 1.75 0 011 10.25v-7.5z"></path></svg></a>
                              <p class="mb-0 text-secondary">{{ count($timeline->comments) }}</p>
                          </div>
                          <div class="d-flex align-items-center">
                              <button type="" class="btn btn-light p-0 border-0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.565 20.565 0 008 13.393a20.561 20.561 0 003.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.75.75 0 01-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5zM8 14.25l-.345.666-.002-.001-.006-.003-.018-.01a7.643 7.643 0 01-.31-.17 22.075 22.075 0 01-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.08 22.08 0 01-3.744 2.584l-.018.01-.006.003h-.002L8 14.25zm0 0l.345.666a.752.752 0 01-.69 0L8 14.25z"></path></svg></button>
                              <p class="mb-0 text-secondary">{{ count($timeline->favorites) }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
      @endif
  </div>
  <div class="my-4 d-flex justify-content-center">
      {{ $timelines->links() }}
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