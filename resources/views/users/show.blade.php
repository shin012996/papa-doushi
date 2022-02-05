@extends('layouts/app')
@section('content')
@section('title', 'ユーザーページ | 育児に向き合うパパ達のQ&Aサイト')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mb-3">
      <div class="card">
        <div class="d-inline-flex">
          <div class="p-3 d-flex flex-column">
            @if($user->profile_image == null)
              <img src="{{ asset('img/no-image.png') }}" class="rounded-circle" width="50" height="50">
            @else
              <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="100" height="100">
            @endif
            <div class="mt-3 d-flex flex-column">
              <h4 class="mb-0 font-weight-bold">{{ $user->name }}</h4>
              <span class="text-secondary">{{ $user->screen_name }}</span>
            </div>
          </div>
          <div class="p-3 d-flex flex-column justify-content-between">
            <div class="d-flex">
              <div>
                @if ($user->id === Auth::user()->id)
                  <a href="{{ url('users/edit/' .$user->id) }}"><i class="fas fa-user-cog fa-2x"></i></a>
                @else
                  @if ($is_following)
                    <form action="{{ route('unfollow', ['id' => $user->id]) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
  
                      <button type="submit" class="btn btn-danger">フォロー解除</button>
                    </form>
                  @else
                    <form action="{{ route('follow', ['id' => $user->id]) }}" method="POST">
                      {{ csrf_field() }}
  
                      <button type="submit" class="btn btn-primary">フォローする</button>
                    </form>
                  @endif
  
                  @if ($is_followed)
                    <span class="mt-2 px-1 bg-secondary text-light">フォローされています</span>
                  @endif
                @endif
              </div>
            </div>
            <div class="d-flex justify-content-end">
              <div class="p-2 d-flex flex-column align-items-center">
                <p class="font-weight-bold">相談した数</p>
                <span>{{ $post_count }}</span>
              </div>
              <div class="p-2 d-flex flex-column align-items-center">
                <p class="font-weight-bold">フォロー数</p>
                <span>{{ $follow_count }}</span>
              </div>
              <div class="p-2 d-flex flex-column align-items-center">
                <p class="font-weight-bold">フォロワー数</p>
                <span>{{ $follower_count }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body col-8 p-0">
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
                @if($timeline->user->profile_image == null)
                  <img src="{{ asset('img/no-image.png') }}" class="rounded-circle" width="50" height="50">
                @else
                  <img src="{{ asset('storage/profile_image/' .$timeline->user->profile_image) }}" class="rounded-circle" width="100" height="100">
                @endif
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
                    <a href="/posts?tags_keyword={{ $tag->name }}" class="btn btn-sm btn-info text-white mr-2">
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
  
                        <button type="submit" class="btn p-0 border-0 bg-white text-danger"><svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve">
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
                          </svg></button>
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
  <div class="my-4 d-flex justify-content-center">
    {{ $timelines->links() }}
  </div>
</div> <!-- /container -->
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
              <div id="editTag_input_add" class="row px-3">
                <input type="text" class="form-control col-6 {{ $errors->has('tags') ? 'is-invalid' : '' }}" id="tags" name="editTag[]" value="{{ old('tags') }}" >
              </div>
            </div>
            <button type="button" class="btn btn-sm" onclick="addInputEditTag()"><i class="fas fa-plus"></i></button>
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