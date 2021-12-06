@extends('layouts/app')
@section('content')
@section('title', 'パパドウシ | 育児に向き合うパパ達のQ&Aサイト')
<body>
  <div class="container">
    <!-- top pageのカルーセル-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('img/toppage/toppage img.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/toppage/toppage img2.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/toppage/toppage img3.png') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/toppage/toppage img4.png') }}" alt="Fourth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container">
    <div class="row flex-xl-nowrap pt-5">
      <div class="col-xl-8">
        <!-- タブの表示設定 -->
        <ul id="myTabs" class="nav nav-tabs">
          <li class="active">
            <a href="#follow"  aria-controls="follow" role="tab" data-toggle="tab" class="text-dark nav-link active">フォロー</a>
          </li>
          <li><a href="#new" aria-controls="new" role="tab" data-toggle="tab" class="text-dark nav-link">新着</a></li>
          <li><a href="#no-ans" aria-controls="no-ans" role="tab" data-toggle="tab" class="text-dark nav-link">未回答</a></li>
          <li><a href="#unsolved" aria-controls="unsolved" role="tab" data-toggle="tab" class="text-dark nav-link">未解決</a></li>
          <li><a href="#solved" aria-controls="solved" role="tab" data-toggle="tab" class="text-dark nav-link">解決済</a></li>
        </ul>
        <!-- Tab panels(以下、タブを押したときに表示する中身) -->
        <div class="tab-content p-2 ">
          <div role="tabpanel" class="tab-pane active fade show" id="follow">
            <div class="row mb-2 mt-2">
              <div class="d-hlex col-12">
                <div class="card flex-row mb-4 shadow-sm h-md-250 col-12">
                  <div class="col-2 pc">
                    <img src="{{ asset('img/icon/accepting.png') }}" alt="">
                    <img src="{{ asset('img/icon/numeber.png') }}" alt="">
                  </div>
                  <div class="card-body d-flex flex-column col-12 col-md-10">
                    <div class="d-flex justify-content-between">
                      <strong class="d-inline-block mb-2 text-primary"><span><img src="{{ asset('img/icon/face.png') }}" alt=""></span> 新米　パパ</strong>
                      <div class="text-muted">2021年12月10日</div>
                    </div>
                    <h5 class="mb-0">
                      <a class="text-dark" href="#">子供（男の子）のイヤイヤ期ってどうやって対応しましたか？</a>
                    </h5>
                    <p class="card-text mb-auto">タグ一覧</p>
                  </div>
                </div>
                
                <div class="card flex-row mb-4 shadow-sm h-md-250 col-12">
                  <div class="col-2 pc">
                    <img src="{{ asset('img/icon/accepting.png') }}" alt="">
                    <img src="{{ asset('img/icon/numeber.png') }}" alt="">
                  </div>
                  <div class="card-body d-flex flex-column col-12 col-md-10">
                    <div class="d-flex justify-content-between">
                      <strong class="d-inline-block mb-2 text-primary"><span><img src="{{ asset('img/icon/face.png') }}" alt=""></span> 新米　パパ</strong>
                      <div class="text-muted">2021年12月10日</div>
                    </div>
                    <h5 class="mb-0">
                      <a class="text-dark" href="#">子供（男の子）のイヤイヤ期ってどうやって対応しましたか？</a>
                    </h5>
                    <p class="card-text mb-auto">タグ一覧</p>
                  </div>
                </div>

                <div class="card flex-row mb-4 shadow-sm h-md-250 col-12">
                  <div class="col-2 pc">
                    <img src="{{ asset('img/icon/accepting.png') }}" alt="">
                    <img src="{{ asset('img/icon/numeber.png') }}" alt="">
                  </div>
                  <div class="card-body d-flex flex-column col-12 col-md-10">
                    <div class="d-flex justify-content-between">
                      <strong class="d-inline-block mb-2 text-primary"><span><img src="{{ asset('img/icon/face.png') }}" alt=""></span> 新米　パパ</strong>
                      <div class="text-muted">2021年12月10日</div>
                    </div>
                    <h5 class="mb-0">
                      <a class="text-dark" href="#">子供（男の子）のイヤイヤ期ってどうやって対応しましたか？</a>
                    </h5>
                    <p class="card-text mb-auto">タグ一覧</p>
                  </div>
                </div>
              </div>
            </div> 
          </div>
    
          <div role="tabpanel" class="tab-pane fade" id="new">
            <div class="d-hlex col-12">
              <div class="card flex-row mb-4 shadow-sm h-md-250 col-12">
                <div class="col-2 pc">
                  <img src="{{ asset('img/icon/accepting.png') }}" alt="">
                  <img src="{{ asset('img/icon/numeber.png') }}" alt="">
                </div>
                <div class="card-body d-flex flex-column col-12 col-md-10">
                  <div class="d-flex justify-content-between">
                    <strong class="d-inline-block mb-2 text-primary"><span><img src="{{ asset('img/icon/face.png') }}" alt=""></span> 新米　パパ</strong>
                    <div class="text-muted">2021年12月10日</div>
                  </div>
                  <h5 class="mb-0">
                    <a class="text-dark" href="#">子供（男の子）のイヤイヤ期ってどうやって対応しましたか？</a>
                  </h5>
                  <p class="card-text mb-auto">タグ一覧</p>
                </div>
              </div>
            </div>
          </div>
    
          <div role="tabpanel" class="tab-pane fade" id="no-ans">
            <div class="d-hlex col-12">
              <div class="card flex-row mb-4 shadow-sm h-md-250 col-12">
                <div class="col-2 pc">
                  <img src="{{ asset('img/icon/accepting.png') }}" alt="">
                  <img src="{{ asset('img/icon/numeber.png') }}" alt="">
                </div>
                <div class="card-body d-flex flex-column col-12 col-md-10">
                  <div class="d-flex justify-content-between">
                    <strong class="d-inline-block mb-2 text-primary"><span><img src="{{ asset('img/icon/face.png') }}" alt=""></span> 新米　パパ</strong>
                    <div class="text-muted">2021年12月10日</div>
                  </div>
                  <h5 class="mb-0">
                    <a class="text-dark" href="#">子供（男の子）のイヤイヤ期ってどうやって対応しましたか？</a>
                  </h5>
                  <p class="card-text mb-auto">タグ一覧</p>
                </div>
              </div>
            </div>
          </div>
    
          <div role="tabpanel" class="tab-pane fade" id="unsolved">
            <div class="d-hlex col-12">
              <div class="card flex-row mb-4 shadow-sm h-md-250 col-12">
                <div class="col-2 pc">
                  <img src="{{ asset('img/icon/accepting.png') }}" alt="">
                  <img src="{{ asset('img/icon/numeber.png') }}" alt="">
                </div>
                <div class="card-body d-flex flex-column col-12 col-md-10">
                  <div class="d-flex justify-content-between">
                    <strong class="d-inline-block mb-2 text-primary"><span><img src="{{ asset('img/icon/face.png') }}" alt=""></span> 新米　パパ</strong>
                    <div class="text-muted">2021年12月10日</div>
                  </div>
                  <h5 class="mb-0">
                    <a class="text-dark" href="#">子供（男の子）のイヤイヤ期ってどうやって対応しましたか？</a>
                  </h5>
                  <p class="card-text mb-auto">タグ一覧</p>
                </div>
              </div>
            </div>  
          </div>

          <div role="tabpanel" class="tab-pane fade" id="solved">
            <div class="d-hlex col-12">
              <div class="card flex-row mb-4 shadow-sm h-md-250 col-12">
                <div class="col-2 pc">
                  <img src="{{ asset('img/icon/endOfReception.png') }}" alt="">
                  <img src="{{ asset('img/icon/numeber.png') }}" alt="">
                </div>
                <div class="card-body d-flex flex-column col-12 col-md-10">
                  <div class="d-flex justify-content-between">
                    <strong class="d-inline-block mb-2 text-primary"><span><img src="{{ asset('img/icon/face.png') }}" alt=""></span> 新米　パパ</strong>
                    <div class="text-muted">2021年12月10日</div>
                  </div>
                  <h5 class="mb-0">
                    <a class="text-dark" href="#">子供（男の子）のイヤイヤ期ってどうやって対応しましたか？</a>
                  </h5>
                  <p class="card-text mb-auto">タグ一覧</p>
                </div>
              </div>
            </div>     
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card sidebar_content">
          <div class="card-body sidebar_fixed">
            <h5>お知らせ</h5>
            <div class=" mb-4 col-md-12 col-lg-12 flex-md-row border-bottom border-secondary">
              <div class="col-md-6 col-lg-12">2021年12月12日</div>
              <a class="mb-1 col-md-10 col-lg-12 text-muted" href="#">パパドウシ運営からのお知らせ</a>
            </div>
            <div class=" mb-4 col-md-12 col-lg-12 flex-md-row border-bottom border-secondary">
              <div class="col-md-6 col-lg-12">2021年12月12日</div>
              <a class="mb-1 col-md-10 col-lg-12 text-muted" href="#">パパドウシ運営からのお知らせ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  </div>
  
</body>




@endsection