<div class="header bg-white shadow">
  <div class="container-fluid  navbar navbar-expand-md col-9 justify-content-between">
    <a class="navbar-brand col-7 col-md-2" href="{{ url('/posts') }}">
      <img src="{{ asset('img/logo _Rec2.png') }}" alt="papa-doushi">
    </a>
      
    <!-- Authentication Links -->
    @guest
    
    @else
    <div class="navbar" id="navbarSupportedContent">      
      <ul class="navbar-nav col-12 justify-content-end d-flex flex-row">
        <!-- Navbar -->
        <li class="nav-item dropdown d-flex p-3">
          @if(auth()->user()->profile_image == null)
            <img src="{{ asset('img/no-image.png') }}" class="rounded-circle" width="50" height="50">
          @else
            <img src="{{ asset('storage/profile_image/' .auth()->user()->profile_image) }}" class="rounded-circle" width="50" height="50">
          @endif
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->screen_name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item btn btn-sm btn-outline-secondary " href="{{ url('users/show/' .auth()->user()->id) }}">ユーザーページ</a>
              <a class="dropdown-item btn btn-sm btn-outline-secondary " href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          <li class="nav-item dropdown p-3">
            <a id="navbarDropdpwn" class="nav-link dropdown-toggle btn btn-info text-white" href="#" role="button" data-toggle="dropdown"><i class="far fa-edit"></i>
              投稿</a>
            <ul class="dropdown-menu">
              <div class="d-flex flex-row">
                <a type="button" class="dropdown-item d-flex flex-column" data-toggle="modal" data-target="#postModal"><i class="fas fa-question-circle fa-3x pr-2"></i><span>相談する</span></a>
                <a type="button" class="dropdown-item d-flex flex-column" data-toggle="modal" data-target="#tweetModal"><i class="far fa-comment-dots fa-3x pr-2"></i><span>つぶやく</span></a>
                <a type="button" class="dropdown-item d-flex flex-column" data-toggle="modal" data-target="#diaryModal"><i class="fas fa-book-open fa-3x pr-2"></i><span>日記</span></a>
              </div>
            </ul>
          </li>
            
          <!-- モーダルの設定 -->
          <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" data-backdrop="static">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="postModalLabel">相談内容を記入してください</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="/posts/store" method="POST" name="soudan">
                  @csrf

                <div class="col-md-12 p-3 w-100 d-flex"> <!-- プロフィール -->
                  @if(auth()->user()->profile_image == null)
                    <img src="{{ asset('img/no-image.png') }}" class="rounded-circle" width="50" height="50">
                  @else
                    <img src="{{ asset('storage/profile_image/' .auth()->user()->profile_image) }}" class="rounded-circle" width="50" height="50">
                  @endif
                  <div class="ml-2 d-flex flex-column">
                      <a href="{{ url('users/' .auth()->user()->id) }}" class="text-secondary">{{ auth()->user()->screen_name }}</a>
                  </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="postModalTitle"> <strong class="lead">タイトル</strong></label>
                      <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                      <label for="postModalTextarea"><strong class="lead">本文</strong></label>
                      <textarea class="form-control rounded-0" id="content" rows="10" name="content"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="postModalTags"><strong class="lead">タグを選択</strong></label>
                      <div id="tag_input_add" class="row px-3">
                        <input type="text" class="form-control col-6 {{ $errors->has('tags') ? 'is-invalid' : '' }}" id="tags" name="tags[]" value="{{ old('tags') }}" >
                      </div>
                    </div>
                    <button type="button" class="btn btn-sm" onclick="addInputTag()"><i class="fas fa-plus"></i></button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-primary" onclick="check()">相談する</button>
                  </div><!-- /.modal-footer -->
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
      </ul>
    </div> 
    @endguest
  </div>
</div>
