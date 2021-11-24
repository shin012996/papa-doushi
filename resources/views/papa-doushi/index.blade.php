@extends('layouts/app')
@section('content')
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



<div class="container pt-5">
  <h5>「いいね」の数が多いユーザー</h5>
  <div class="col-md-8">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">Name : <br> <span>age : </span></strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#">いいねの数</a>
        </h3>
        <div class="mb-1 text-muted">パパドウシの参加日：○○年〇〇月〇〇日</div>
        <p class="card-text mb-auto">お子様の人数、性別、年齢</p>
        <button type="button" class="btn btn-primary btn-sm">公開プロフィールへ</button>
      </div>
      <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
    </div>
  </div>
  <div class="col-md-8">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">Name : <br> <span>age : </span></strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#">いいねの数</a>
        </h3>
        <div class="mb-1 text-muted">パパドウシの参加日：○○年〇〇月〇〇日</div>
        <p class="card-text mb-auto">お子様の人数、性別、年齢</p>
        <button type="button" class="btn btn-primary btn-sm">公開プロフィールへ</button>
      </div>
      <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
    </div>
  </div>
  <div class="col-md-8">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">Name : <br> <span>age : </span></strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#">いいねの数</a>
        </h3>
        <div class="mb-1 text-muted">パパドウシの参加日：○○年〇〇月〇〇日</div>
        <p class="card-text mb-auto">お子様の人数、性別、年齢</p>
        <button type="button" class="btn btn-primary btn-sm">公開プロフィールへ</button>
      </div>
      <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
    </div>
  </div>
</div>
@endsection