２段階認証のパスワードをご送付します。<br>

【パスワード】
{{-- {{ $tfa_token }} --}}
<button onclick="location.href='{{ route('user.two_factor_auth',['tfa_token' => $tfa_token ]) }}'">メールアドレス認証を完了する</button>