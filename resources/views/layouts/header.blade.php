<div class="header bg-white shadow">
  <div class="container-fluid  navbar navbar-expand-md col-12 justify-content-between">
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
          <img src="{{ asset('storage/profile_image/' .auth()->user()->profile_image) }}" class="rounded-circle" width="50" height="50">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->screen_name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item btn btn-sm btn-outline-secondary " href="{{ url('users/show/' .auth()->user()->id) }}">ユーザーページ</a>
              <a class="dropdown-item btn btn-sm btn-outline-secondary " href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('ログアウト') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
        </li>
        <li class="nav-item p-3">
          <!-- 切り替えボタンの設定 -->
          <button type="button" class="btn btn-outline-info text-dark" data-toggle="modal" data-target="#postModal">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>相談する
          </button>
              
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
                    <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
                    <div class="ml-2 d-flex flex-column">
                        <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
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
                    <button type="button" class="btn btn-sm btn-primary" onclick="addInputTag()">+</button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-primary" onclick="check()">相談する</button>
                  </div><!-- /.modal-footer -->
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </li>
      </ul>
    </div> 
    @endguest
  </div>
</div>
