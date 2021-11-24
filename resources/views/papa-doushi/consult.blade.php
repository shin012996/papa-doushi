@extends('layouts/app')
@section('content')
<div class="container">
  <h5 class="pt-5"></h5>
    <h3>あなたの経験を元に、アドバイスをしてみませんか？</h3>
    <!-- 以下タブの表示設定 -->
    <ul id="myTabs" class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#follow"  aria-controls="follow" role="tab" data-toggle="tab" class="nav-link active">フォロー</a>
      </li>
      <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab" class="nav-link">新着</a></li>
      <li role="presentation"><a href="#no-ans" aria-controls="no-ans" role="tab" data-toggle="tab" class="nav-link">未回答</a></li>
      <li role="presentation"><a href="#relevant" aria-controls="relevant" role="tab" data-toggle="tab" class="nav-link">関連性の高い質問</a></li>
    </ul>
 
    <!-- Tab panes(以下、タブを押したときに表示する中身) -->
    <div class="tab-content p-2 ">
      <div role="tabpanel" class="tab-pane active fade show" id="follow">
        <div class="row mb-2 mt-2">
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
        </div> 
      </div>

      <div role="tabpanel" class="tab-pane fade" id="new">
        <div class="row mb-2 mt-2">
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル2</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
        </div> 
      </div>

      <div role="tabpanel" class="tab-pane fade" id="no-ans">
        <div class="row mb-2 mt-2">
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル3</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
        </div> 
      </div>

      <div role="tabpanel" class="tab-pane fade" id="relevant">
        <div class="row mb-2 mt-2">
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">User Name</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">タイトル4</a>
                </h3>
                <div class="mb-1 text-muted">日時：○○年〇〇月〇〇日</div>
                <p class="card-text mb-auto">相談内容の一部を表示</p>
                <button type="button" class="btn btn-primary btn-sm">詳細はこちら</button>
              </div>
              <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="画像">
            </div>
          </div>
        </div> 
      </div>
    </div>
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>




</div>
@endsection