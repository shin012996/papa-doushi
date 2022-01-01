@extends('layouts/app')
@section('content')
@section('title', 'パパドウシ | 育児に向き合うパパ達のQ&Aサイト')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8 mb-3 text-right">
          <a class="text-dark" href="{{ url('users/') }}">
            ユーザ一覧
            <svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 24px; height: 24px; opacity: 1;" xml:space="preserve">
              <style type="text/css">
                .st0{fill:#374149;}
              </style>
              <g>
                <path class="st0" d="M507.88,314.485c-2.141-10.973-86.718-56.867-90.477-57.742h-1.402v-27.667
                  c7.344-4.153,9.094-16.391,9.574-19.711c0-0.035,0.008-0.05,0.012-0.078c0.011-0.082,0.035-0.144,0.046-0.226
                  c10.477,3.512,12.004-16.266,12.527-21.203c0.485-4.542-1.527-7.734-2.968-8.957c0.347-0.703,0.742-1.793,1.136-3.062
                  c1.004-3.191,1.879-7.824,2.227-12.676c0.527-7.125-0.13-14.902-3.496-19.71c-1.18-1.661-3.016-3.762-5.114-5.902
                  c-4.894-4.809-11.278-9.746-15.035-9.746c-6.078-10.93-13.859-18.008-28.195-18.973c-0.875-0.042-1.746-0.042-2.707-0.086
                  c-11.89-0.176-32.39,14.074-40.519,28.805c-8.133,14.644-10.535,19.93-6.426,38.289c0.347,1.27,0.742,2.359,1.137,3.062
                  c-0.742,0.61-1.574,1.703-2.188,3.234c-0.609,1.527-1.004,3.453-0.742,5.722c0.086,1.051,0.262,2.754,0.523,4.766
                  c1.008,7.52,3.714,19.23,12.023,16.434c0.172,1.489,0.914,5.598,2.446,9.793c1.531,4.196,3.805,8.434,7.125,10.227v27.667h-1.442
                  c-1.546,0.379-17.461,8.758-35.511,19.126c-2.867,1.617-5.774,3.266-8.695,4.949c0.031,0.016,0.062,0.031,0.09,0.047
                  c-0.054,0.031-0.106,0.062-0.16,0.094c17.266,9.004,40.91,22.949,41.218,23.125c49.828,29.504,57.476,39.469,59.922,49.305
                  c15.172-0.219,30.336-0.657,45.504-1.313l51.226-2.141c1.488-0.042,2.582-1.312,2.449-2.801
                  C511.247,340.141,509.235,321.259,507.88,314.485z" style="fill: rgb(58, 171, 210);"></path>
                <path class="st0" d="M194.826,283.856c1.864-0.973,3.774-1.981,5.434-2.805c-0.027-0.015-0.058-0.031-0.086-0.05
                  c0.054-0.028,0.114-0.059,0.168-0.086c-21.375-12.542-42.488-23.734-44.324-24.172h-1.398v-27.667
                  c7.343-4.153,9.094-16.391,9.574-19.711v-0.215c0.003-0.034,0.011-0.058,0.019-0.09c8.942,2.988,11.344-10.847,12.218-18.098
                  c0.176-1.27,0.262-2.359,0.348-3.106c0.176-1.574,0.046-2.972-0.262-4.195c-0.566-2.316-1.746-3.976-2.707-4.762
                  c0.348-0.703,0.742-1.793,1.133-3.062c0.961-3.191,1.882-7.824,2.23-12.676c0.481-7.125-0.129-14.902-3.539-19.71
                  c-1.137-1.661-2.973-3.762-5.07-5.902c-4.898-4.809-11.277-9.746-15.035-9.746c-6.078-10.93-13.859-18.008-28.195-18.973
                  c-0.874-0.042-1.793-0.042-2.71-0.086c-11.887-0.176-32.387,14.074-40.516,28.805c-8.133,14.644-10.535,19.93-6.469,38.289
                  c0.391,1.27,0.786,2.359,1.18,3.062c-1.446,1.222-3.41,4.414-2.973,8.957c0.524,4.942,2.055,24.742,12.586,21.199
                  c0.175,1.489,0.918,5.598,2.449,9.793c1.531,4.196,3.758,8.434,7.082,10.227v27.667h-1.398c-0.906,0.215-6.622,3.11-14.758,7.504
                  c-5.93,3.188-13.113,7.18-20.691,11.543C34.279,290.048,5.35,308.126,4.084,314.485c-1.312,6.774-3.32,25.614-4.066,32.606
                  c-0.175,1.488,0.965,2.754,2.45,2.843l51.183,2.141c15.168,0.656,30.336,1.094,45.504,1.313
                  c2.488-9.836,10.141-19.801,59.969-49.305C159.435,303.923,178.451,292.7,194.826,283.856z" style="fill: rgb(58, 171, 210);"></path>
                <path class="st0" d="M387.33,353.602c-19.188-17.918-93.187-57.957-96.906-58.789h-1.266h-0.305v-30.988
                  c8.082-4.602,10.11-17.859,10.672-21.875c0.031-0.191,0.074-0.347,0.102-0.542c0.91,0.301,1.82,0.43,2.602,0.43
                  c9.394,0,10.882-19.141,11.449-24.211c0.528-5.07-1.702-8.656-3.32-10.011c0.394-0.833,0.828-2.012,1.266-3.454
                  c1.094-3.582,2.102-8.742,2.492-14.207c0.57-7.996-0.129-16.695-3.934-22.07c-1.308-1.883-3.363-4.242-5.726-6.602
                  c-5.465-5.422-12.629-10.926-16.828-10.926c-6.816-12.238-15.515-20.195-31.602-21.246c-0.961-0.086-1.965-0.086-3.015-0.129
                  h-0.219c-13.374,0-36.102,15.867-45.195,32.301c-9.09,16.39-11.801,22.335-7.21,42.878c0.438,1.442,0.874,2.621,1.312,3.454
                  c-1.621,1.355-3.847,4.941-3.324,10.011c0.523,5.07,2.012,24.211,11.406,24.211c0.832,0,1.707-0.129,2.668-0.434
                  c0.218,1.66,1.05,6.25,2.754,10.926c1.707,4.722,4.242,9.484,7.957,11.496v10.656l-0.305,20.332h-0.003h-1.266
                  c-3.672,0.832-77.629,40.871-96.859,58.789c-2.626,2.406-4.199,4.418-4.504,5.902c-1.485,7.562-3.758,28.676-4.59,36.543
                  c-0.176,1.617,1.094,3.058,2.71,3.144l57.39,2.406c26.836,1.094,53.719,1.66,80.554,1.66c26.664,0,53.328-0.523,79.946-1.66
                  l57.39-2.363c1.664-0.086,2.93-1.527,2.754-3.144c-0.828-7.867-3.102-29.024-4.59-36.586
                  C391.525,358.02,389.907,356.008,387.33,353.602z" style="fill: rgb(58, 171, 210);"></path>
              </g>
              </svg>
          </a>
      </div>
      @if (isset($timelines))
          @foreach ($timelines as $timeline)
              <div class="col-md-8 mb-3">
                  <div class="card">
                      <div class="card-haeder p-3 w-100 d-flex">
                          <img src="{{ asset('storage/profile_image/' .$timeline->user->profile_image) }}" class="rounded-circle" width="50" height="50">
                          <div class="ml-2 d-flex flex-column">
                              <p class="mb-0">{{ $timeline->user->name }}</p>
                              <a href="{{ url('users/show/' .$timeline->user->id) }}" class="text-secondary">{{ $timeline->user->screen_name }}</a>
                          </div>
                          <div class="d-flex justify-content-end flex-grow-1">
                              <p class="mb-0 text-secondary">{{ $timeline->created_at->format('Y-m-d H:i') }}</p>
                          </div>
                      </div>
                      <div class="card-body">
                        <h3>
                          <a class="text-dark" href="{{ url('posts/details/' .$timeline->id) }}">
                            {!! nl2br(e($timeline->title)) !!}
                          </a>
                        </h3>
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