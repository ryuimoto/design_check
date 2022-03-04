@extends('templates.user.dashboard')
@section('contents')
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">疑問に思ったことを投稿してみよう！</h3>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label>スクリーンショットファイル</label>
                    <div class="mb-3">
                      @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      <input class="form-control" type="file" id="formFile" name="img">
                    </div>
                    <label>タイトル</label>
                    <div class="mb-3">
                      @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      <input type="text" class="form-control" placeholder="ヘッダーには必ずロゴを入れた方がいいですか？" aria-label="Email" aria-describedby="email-addon" name="title">
                    </div>
                    <label>詳細</label>
                    <div class="mb-3">
                        @error('content')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="WEBサイトの場合「noindex」にしていない限りどのページもランディングの対象になります。そのため、常に表示してあるグローバルエリアにロゴやサイトの特性を置くのはブランディング効果があると思います。しかし、サービスや機能を理解したうえでダウンロードして使うアプリケーションなどではロゴは起動時にある程度で、あとは機能の使いやすさに特化したUIでも問題ないかと思います。（※ただし、最近は画面のスクリーンショットがユーザー間で共有されることが多いので、敢えてロゴを入れておくのはブランディング戦略のひとつと言えるかもしれません。）" name="content"></textarea>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">投稿する</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection