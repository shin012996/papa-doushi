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
                  <a href="{{ url('papa-doushi/' .$user->id .'/edit') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M16 12a4 4 0 11-8 0 4 4 0 018 0zm-1.5 0a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path><path fill-rule="evenodd" d="M12 1c-.268 0-.534.01-.797.028-.763.055-1.345.617-1.512 1.304l-.352 1.45c-.02.078-.09.172-.225.22a8.45 8.45 0 00-.728.303c-.13.06-.246.044-.315.002l-1.274-.776c-.604-.368-1.412-.354-1.99.147-.403.348-.78.726-1.129 1.128-.5.579-.515 1.387-.147 1.99l.776 1.275c.042.069.059.185-.002.315-.112.237-.213.48-.302.728-.05.135-.143.206-.221.225l-1.45.352c-.687.167-1.249.749-1.304 1.512a11.149 11.149 0 000 1.594c.055.763.617 1.345 1.304 1.512l1.45.352c.078.02.172.09.22.225.09.248.191.491.303.729.06.129.044.245.002.314l-.776 1.274c-.368.604-.354 1.412.147 1.99.348.403.726.78 1.128 1.129.579.5 1.387.515 1.99.147l1.275-.776c.069-.042.185-.059.315.002.237.112.48.213.728.302.135.05.206.143.225.221l.352 1.45c.167.687.749 1.249 1.512 1.303a11.125 11.125 0 001.594 0c.763-.054 1.345-.616 1.512-1.303l.352-1.45c.02-.078.09-.172.225-.22.248-.09.491-.191.729-.303.129-.06.245-.044.314-.002l1.274.776c.604.368 1.412.354 1.99-.147.403-.348.78-.726 1.129-1.128.5-.579.515-1.387.147-1.99l-.776-1.275c-.042-.069-.059-.185.002-.315.112-.237.213-.48.302-.728.05-.135.143-.206.221-.225l1.45-.352c.687-.167 1.249-.749 1.303-1.512a11.125 11.125 0 000-1.594c-.054-.763-.616-1.345-1.303-1.512l-1.45-.352c-.078-.02-.172-.09-.22-.225a8.469 8.469 0 00-.303-.728c-.06-.13-.044-.246-.002-.315l.776-1.274c.368-.604.354-1.412-.147-1.99-.348-.403-.726-.78-1.128-1.129-.579-.5-1.387-.515-1.99-.147l-1.275.776c-.069.042-.185.059-.315-.002a8.465 8.465 0 00-.728-.302c-.135-.05-.206-.143-.225-.221l-.352-1.45c-.167-.687-.749-1.249-1.512-1.304A11.149 11.149 0 0012 1zm-.69 1.525a9.648 9.648 0 011.38 0c.055.004.135.05.162.16l.351 1.45c.153.628.626 1.08 1.173 1.278.205.074.405.157.6.249a1.832 1.832 0 001.733-.074l1.275-.776c.097-.06.186-.036.228 0 .348.302.674.628.976.976.036.042.06.13 0 .228l-.776 1.274a1.832 1.832 0 00-.074 1.734c.092.195.175.395.248.6.198.547.652 1.02 1.278 1.172l1.45.353c.111.026.157.106.161.161a9.653 9.653 0 010 1.38c-.004.055-.05.135-.16.162l-1.45.351a1.833 1.833 0 00-1.278 1.173 6.926 6.926 0 01-.25.6 1.832 1.832 0 00.075 1.733l.776 1.275c.06.097.036.186 0 .228a9.555 9.555 0 01-.976.976c-.042.036-.13.06-.228 0l-1.275-.776a1.832 1.832 0 00-1.733-.074 6.926 6.926 0 01-.6.248 1.833 1.833 0 00-1.172 1.278l-.353 1.45c-.026.111-.106.157-.161.161a9.653 9.653 0 01-1.38 0c-.055-.004-.135-.05-.162-.16l-.351-1.45a1.833 1.833 0 00-1.173-1.278 6.928 6.928 0 01-.6-.25 1.832 1.832 0 00-1.734.075l-1.274.776c-.097.06-.186.036-.228 0a9.56 9.56 0 01-.976-.976c-.036-.042-.06-.13 0-.228l.776-1.275a1.832 1.832 0 00.074-1.733 6.948 6.948 0 01-.249-.6 1.833 1.833 0 00-1.277-1.172l-1.45-.353c-.111-.026-.157-.106-.161-.161a9.648 9.648 0 010-1.38c.004-.055.05-.135.16-.162l1.45-.351a1.833 1.833 0 001.278-1.173 6.95 6.95 0 01.249-.6 1.832 1.832 0 00-.074-1.734l-.776-1.274c-.06-.097-.036-.186 0-.228.302-.348.628-.674.976-.976.042-.036.13-.06.228 0l1.274.776a1.832 1.832 0 001.734.074 6.95 6.95 0 01.6-.249 1.833 1.833 0 001.172-1.277l.353-1.45c.026-.111.106-.157.161-.161z"></path></svg></a>
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
                <a href="{{ url('papa-doushi/' .$timeline->user->id) }}" class="text-secondary">{{  $timeline->user->screen_name }}</a>
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

                          <a href="{{ url('posts/' .$timeline->id .'/edit') }}" class="dropdown-item">編集</a>
                          <button type="submit" class="dropdown-item del-btn">削除</button>
                      </form>
                    </div>
                  </div>
                @endif
                <div class="mr-3 d-flex align-items-center">
                  <a href="#"><i class="far fa-comment fa-fw"></i></a>
                  <p class="mb-0 text-secondary">{{ count($timeline->comments) }}</p>
                </div>
                <div class="d-flex align-items-center">
                  <a href="#"><i class="far fa-comment fa-fw"></i></a>
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