@extends('templates.user.main')
@section('contents')
    <section id="contact" class="contact">
        <br>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>会員登録</p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <img src="{{ asset('FlexStart/assets/img/features-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    {{-- <form method="post" action="{{ route('user.register') }}" class="php-email-form"> --}}
                        <form method="post" action="{{ route('user.register') }}">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <p>メールアドレス</p>
                                <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="info@designcheck.ne.jp" required>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit">無料で会員登録する</button>
                            </div>
                            <div class="col-md-12 text-center">
                                <a href="{{ route('user.login') }}">既に登録済みの方はこちら</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Secti
@endsection