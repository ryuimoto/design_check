@extends('templates.user.main')
@section('contents')
    <section id="contact" class="contact">
        <br>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>ログイン</p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <img src="{{ asset('FlexStart/assets/img/features.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <p>メールアドレス</p>
                                <input type="text" name="name" class="form-control" placeholder="info@designcheck.ne.jp" required>
                            </div>
                            <div class="col-md-12">
                                <p>パスワード</p>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit">無料で会員登録する</button>
                            </div>
                            <div class="col-md-12 text-center">
                                <a href="{{ route('user.register') }}">新規会員登録はこちら</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Secti
@endsection