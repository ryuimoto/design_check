<!DOCTYPE html>
<html>
<head>
	<title>DesignCheck | LoginForm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('UserLogin/css/style.css') }}">
</head>
<body>
	<div class="container">
		<!--navbar-->
		<div class="header-area">
			  <!-- site-navbar start -->
			  <div class="navbar-area">
			      <nav class="site-navbar">
			        <!-- site logo -->
   					<a href="{{ route('user.top') }}" class="site-logo">DesignCheck</a>
			        <!-- site menu/nav -->
			        <ul>
			          <li><a href="{{ route('user.top') }}">ホーム</a></li>
			          <li><a href="#" @if (Request::routeIs('user.login'))
						class="btn btn-primary sign-in-btn"
					  @endif >ログイン</a></li>
			          <li><a href="#" @if (Request::routeIs('user.register'))
						class="btn btn-primary sign-in-btn"
					  @endif >サインアップ</a></li>
			        </ul>

			        <!-- nav-toggler for mobile version only -->
			        <button class="nav-toggler">
			          <span></span>
			        </button>
			      </nav>
			  
			  </div><!-- navbar-area end -->

		</div>
		<!--login form -->
		<div id="login" class="row col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="col-lg-6 col-md-6">
				<img class="pic-login-2" src="{{ asset('UserLogin/images/pic-login-2.svg') }} ">
			</div>
			<div class="col-lg-5 col-md-6 col-sm-12 col-12 login-form">
				@yield('contents')
			</div>
		</div>
		
	</div>

<div class="copyright">
	&copy; Copyright <strong><span>DesignCheck</span></strong>. All Rights Reserved
</div>
	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script type="text/javascript" src="{{ asset('UserLogin/js/login.js') }}"></script>

</body>
</html>