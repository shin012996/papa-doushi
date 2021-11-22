<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/papa-doushi') }}">
        <img src="{{ asset('img/logo_Rec.png') }}" alt="papa-doushi">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link btn btn-sm btn-outline-secondary" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link btn btn-sm btn-outline-secondary" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item btn btn-sm btn-outline-secondary " href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>

<div class="container">
  <div class="header py-3">
    <div class="nav-scroller py-1 mb-2 border-bottom-1">
      <nav class="nav d-flex justify-content-atart">
        <a class="p-2 text-muted" href="#">相談する</a>
        <a class="p-2 text-muted" href="#">Wiki</a>
        <a class="p-2 text-muted" href="#">Q＆A</a>
        <a class="p-2 text-muted" href="#">ヘルプ</a>
      </nav>
    </div>
  </div>
</div>