@extends('layouts/app')
@section('content')
@section('title', 'ユーザーページ | 育児に向き合うパパ達のQ&Aサイト')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mb-3">
      <div class="card">
        <div class="d-inline-flex">
          <div class="p-3 d-flex flex-column">
            <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="100" height="100">
            <div class="mt-3 d-flex flex-column">
              <h4 class="mb-0 font-weight-bold">{{ $user->name }}</h4>
              <span class="text-secondary">{{ $user->screen_name }}</span>
            </div>
          </div>
          <div class="p-3 d-flex flex-column justify-content-between">
            <div class="d-flex">
              <div>
                @if ($user->id === Auth::user()->id)
                  <a href="{{ url('users/edit/' .$user->id) }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M16 12a4 4 0 11-8 0 4 4 0 018 0zm-1.5 0a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path><path fill-rule="evenodd" d="M12 1c-.268 0-.534.01-.797.028-.763.055-1.345.617-1.512 1.304l-.352 1.45c-.02.078-.09.172-.225.22a8.45 8.45 0 00-.728.303c-.13.06-.246.044-.315.002l-1.274-.776c-.604-.368-1.412-.354-1.99.147-.403.348-.78.726-1.129 1.128-.5.579-.515 1.387-.147 1.99l.776 1.275c.042.069.059.185-.002.315-.112.237-.213.48-.302.728-.05.135-.143.206-.221.225l-1.45.352c-.687.167-1.249.749-1.304 1.512a11.149 11.149 0 000 1.594c.055.763.617 1.345 1.304 1.512l1.45.352c.078.02.172.09.22.225.09.248.191.491.303.729.06.129.044.245.002.314l-.776 1.274c-.368.604-.354 1.412.147 1.99.348.403.726.78 1.128 1.129.579.5 1.387.515 1.99.147l1.275-.776c.069-.042.185-.059.315.002.237.112.48.213.728.302.135.05.206.143.225.221l.352 1.45c.167.687.749 1.249 1.512 1.303a11.125 11.125 0 001.594 0c.763-.054 1.345-.616 1.512-1.303l.352-1.45c.02-.078.09-.172.225-.22.248-.09.491-.191.729-.303.129-.06.245-.044.314-.002l1.274.776c.604.368 1.412.354 1.99-.147.403-.348.78-.726 1.129-1.128.5-.579.515-1.387.147-1.99l-.776-1.275c-.042-.069-.059-.185.002-.315.112-.237.213-.48.302-.728.05-.135.143-.206.221-.225l1.45-.352c.687-.167 1.249-.749 1.303-1.512a11.125 11.125 0 000-1.594c-.054-.763-.616-1.345-1.303-1.512l-1.45-.352c-.078-.02-.172-.09-.22-.225a8.469 8.469 0 00-.303-.728c-.06-.13-.044-.246-.002-.315l.776-1.274c.368-.604.354-1.412-.147-1.99-.348-.403-.726-.78-1.128-1.129-.579-.5-1.387-.515-1.99-.147l-1.275.776c-.069.042-.185.059-.315-.002a8.465 8.465 0 00-.728-.302c-.135-.05-.206-.143-.225-.221l-.352-1.45c-.167-.687-.749-1.249-1.512-1.304A11.149 11.149 0 0012 1zm-.69 1.525a9.648 9.648 0 011.38 0c.055.004.135.05.162.16l.351 1.45c.153.628.626 1.08 1.173 1.278.205.074.405.157.6.249a1.832 1.832 0 001.733-.074l1.275-.776c.097-.06.186-.036.228 0 .348.302.674.628.976.976.036.042.06.13 0 .228l-.776 1.274a1.832 1.832 0 00-.074 1.734c.092.195.175.395.248.6.198.547.652 1.02 1.278 1.172l1.45.353c.111.026.157.106.161.161a9.653 9.653 0 010 1.38c-.004.055-.05.135-.16.162l-1.45.351a1.833 1.833 0 00-1.278 1.173 6.926 6.926 0 01-.25.6 1.832 1.832 0 00.075 1.733l.776 1.275c.06.097.036.186 0 .228a9.555 9.555 0 01-.976.976c-.042.036-.13.06-.228 0l-1.275-.776a1.832 1.832 0 00-1.733-.074 6.926 6.926 0 01-.6.248 1.833 1.833 0 00-1.172 1.278l-.353 1.45c-.026.111-.106.157-.161.161a9.653 9.653 0 01-1.38 0c-.055-.004-.135-.05-.162-.16l-.351-1.45a1.833 1.833 0 00-1.173-1.278 6.928 6.928 0 01-.6-.25 1.832 1.832 0 00-1.734.075l-1.274.776c-.097.06-.186.036-.228 0a9.56 9.56 0 01-.976-.976c-.036-.042-.06-.13 0-.228l.776-1.275a1.832 1.832 0 00.074-1.733 6.948 6.948 0 01-.249-.6 1.833 1.833 0 00-1.277-1.172l-1.45-.353c-.111-.026-.157-.106-.161-.161a9.648 9.648 0 010-1.38c.004-.055.05-.135.16-.162l1.45-.351a1.833 1.833 0 001.278-1.173 6.95 6.95 0 01.249-.6 1.832 1.832 0 00-.074-1.734l-.776-1.274c-.06-.097-.036-.186 0-.228.302-.348.628-.674.976-.976.042-.036.13-.06.228 0l1.274.776a1.832 1.832 0 001.734.074 6.95 6.95 0 01.6-.249 1.833 1.833 0 001.172-1.277l.353-1.45c.026-.111.106-.157.161-.161z"></path></svg></a>
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
    @if (isset($timelines))
      @foreach ($timelines as $timeline)
        <div class="col-md-8 mb-3">
          <div class="card">
            <div class="card-haeder p-3 w-100 d-flex">
              <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
              <div class="ml-2 d-flex flex-column flex-grow-1">
                <p class="mb-0">{{ $timeline->user->name }}</p>
                <a href="{{ url('users/show/' .$timeline->user->id) }}" class="text-secondary">{{  $timeline->user->screen_name }}</a>
              </div>
              <div class="d-flex justify-content-end flex-grow-1">
                <p class="mb-0 text-secondary">{{ $timeline->created_at->format('Y-m-d H:i') }}</p>
              </div>
              </div>
              <div class="card-body">
                {{ $timeline->text }}
              </div>
              <div class="card-footer py-1 d-flex justify-content-end bg-white">
                @if ($timeline->user->id === Auth::user()->id)
                  <div class="dropdown mr-3 d-flex align-items-center">
                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-fw"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <form method="POST" action="{{ url('posts/' .$timeline->id) }}" class="mb-0">
                          @csrf
                          @method('DELETE')

                          <a href="{{ url('posts/edit/' .$timeline->id) }}" class="dropdown-item">編集</a>
                          <button type="submit" class="dropdown-item del-btn">削除</button>
                      </form>
                    </div>
                  </div>
                @endif

                <div class="mr-3 d-flex align-items-center">
                  <a href="{{ url('posts/' .$timeline->id) }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2.75 2.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h2a.75.75 0 01.75.75v2.19l2.72-2.72a.75.75 0 01.53-.22h4.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25H2.75zM1 2.75C1 1.784 1.784 1 2.75 1h10.5c.966 0 1.75.784 1.75 1.75v7.5A1.75 1.75 0 0113.25 12H9.06l-2.573 2.573A1.457 1.457 0 014 13.543V12H2.75A1.75 1.75 0 011 10.25v-7.5z"></path></svg></a>
                  <p class="mb-0 text-secondary">{{ count($timeline->comments) }}</p>
                </div>
                <div class="d-flex align-items-center">
                  @if (!in_array(Auth::user()->id, array_column($timeline->favorites->toArray(), 'user_id'), TRUE))
                    <form method="POST" action="{{ url('favorites/') }}" class="mb-0">
                      @csrf

                      <input type="hidden" name="post_id" value="{{ $timeline->id }}">
                      <button type="submit" class="btn p-0 border-0 bg-white text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                          <path fill-rule="evenodd" d="M4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.565 20.565 0 008 13.393a20.561 20.561 0 003.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.75.75 0 01-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5zM8 14.25l-.345.666-.002-.001-.006-.003-.018-.01a7.643 7.643 0 01-.31-.17 22.075 22.075 0 01-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.08 22.08 0 01-3.744 2.584l-.018.01-.006.003h-.002L8 14.25zm0 0l.345.666a.752.752 0 01-.69 0L8 14.25z"></path>
                        </svg>
                      </button>
                    </form>
                  @else
                    <form method="POST" action="{{ url('favorites/' .array_column($timeline->favorites->toArray(), 'id', 'user_id')[Auth::user()->id]) }}" class="mb-0">
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
</div> <!-- /container -->
@endsection