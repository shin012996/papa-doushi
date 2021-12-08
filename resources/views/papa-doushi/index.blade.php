@extends('layouts/app')
@section('content')
@section('title', 'パパドウシ | 育児に向き合うパパ達のQ&Aサイト')
<div class="toppage bg-white">
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
        <div class="scroll-nav">
          <div class="scroll-nav__view">
            <ul id="myTabs" class="scroll-nav__list nav">
              <li class="scroll-nav__item active">
                <a href="#follow"  aria-controls="follow" role="tab" data-toggle="tab" class="text-dark nav-link active">フォロー</a>
              </li>
              <li class="scroll-nav__item">
                <a href="#new" aria-controls="new" role="tab" data-toggle="tab" class="text-dark nav-link">新着</a>
              </li>
              <li class="scroll-nav__item">
                <a href="#no-ans" aria-controls="no-ans" role="tab" data-toggle="tab" class="text-dark nav-link">未回答</a>
              </li>
              <li class="scroll-nav__item">
                <a href="#unsolved" aria-controls="unsolved" role="tab" data-toggle="tab" class="text-dark nav-link">未解決</a>
              </li>
              <li class="scroll-nav__item">
                <a href="#solved" aria-controls="solved" role="tab" data-toggle="tab" class="text-dark nav-link">解決済</a>
              </li>
            </ul>
          </div>
          <div class="next-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z"></path></svg>
          </div>
        </div>
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

                <nav aria-label="page Navigation">
                  <ul class="pagination ">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous Page">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next Page">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>

              </div>
            </div> 
          </div>
    
          <!-- new -->
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
              <nav aria-label="page Navigation">
                <ul class="pagination ">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous Page">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next Page">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>

          <!-- no-ans -->
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

              <nav aria-label="page Navigation">
                <ul class="pagination ">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous Page">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next Page">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>

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

              <nav aria-label="page Navigation">
                <ul class="pagination ">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous Page">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next Page">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>

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

              <nav aria-label="page Navigation">
                <ul class="pagination ">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous Page">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next Page">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
              
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
  
</div>




@endsection