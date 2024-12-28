<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>{{ $general->sitename($page_title) }}</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" type="image/png" href="{{ asset(imagePath()['logoIcon']['path'] .'/favicon.png') }}"/>
        <!-- bootstrap 4  -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/bootstrap.min.css') }}">
      <!-- fontawesome 5  -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/all.min.css') }}">
      <!-- line-awesome webfont -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/line-awesome.min.css') }}">
      <!-- image and videos view on page plugin -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/lightcase.css') }}">

      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/animate.min.css') }}">
      <!-- custom select css -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/nice-select.css') }}">
      <!-- slick slider css -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/slick.css') }}">
      <!-- dashdoard main css -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/main.css') }}">
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset(asset($activeTemplateTrue)."/css/color.php?color1=$general->base_color&color2=$general->secondary_color") }}">

    @include('partials.seo')
    @stack('style-lib')
    @stack('style')


</head>
<body>
@php echo fbcomment() @endphp
  <div class="preloader">
    <div class="dl">
      <div class="dl__container">
        <div class="dl__corner--top"></div>
        <div class="dl__corner--bottom"></div>
      </div>
      <div class="dl__square"></div>
    </div>
  </div>

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket" aria-hidden="true"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->
  <div class="page-wrapper">
      <!-- header-section start  -->
      <header>
		<div class="container">
			<div class="row align-items-center py-3">
				<div class="col-lg-2">
					<div class="logo">
						<a href="#">
							<!-- <img src="assets/img/PM-Electronics-Logo-for-WordPress-03-1.png" alt="P&M ElectronicsStore"
								class="img-fluid"> -->
							<img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="P&M ElectronicsStore"
								class="img-fluid">
						</a>
					</div>
				</div>
				<div class="col-lg-8">
					<nav class="navbar navbar-expand-lg navbar-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="https://sftechbuyer.com/">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="https://sftechbuyer.com#sellSection"
										id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										Sell
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item"
											href="https://sftechbuyer.com/smartphone">Smartphone</a>
										<a class="dropdown-item" href="https://sftechbuyer.com/tablet">Tablet</a>
										<a class="dropdown-item"
											href="https://sftechbuyer.com/smartwatch">SmartWatch</a>
										<a class="dropdown-item"
											href="https://sftechbuyer.com/headphones-airpods">Headphones</a>
										<a class="dropdown-item" href="https://sftechbuyer.com/game-console">Game
											Console</a>
									</div>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="https://sell.cellnowstore.com/instant-sale">Instant Sell</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" href="https://sftechbuyer.com#why-us">Why us?</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://sftechbuyer.com#how-it-works">How it works?</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://sftechbuyer.com/faqs">F.A.Q.</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"
										data-toggle="modal" data-target="#trackOrderForm">Track Order</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="col-lg-2">
					<div class="user-menu d-flex justify-content-center align-items-center">
						<ul class="d-flex justify-content-center align-items-center">
							<li class="nav-item dropdown" style="list-style: none;">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-user"></i>
								</a>
                                @guest
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('user.login') }}"><i class="las la-sign-in-alt"></i> @lang('Login')</a>
                                    <br>
                                    <a href="{{ route('user.register') }}"><i class="las la-user-plus"></i> @lang('Registration')</a>
								</div>
                                @else
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('user.home') }}"><i class="las la-user-plus"></i> @lang('Dashboard')</a>
                                    <a href="{{ route('user.logout') }}"><i class="las la-sign-out-alt"></i> @lang('Logout')</a>
                                </div>
                                @endguest

							</li>
                            @auth
							<li class="nav-item" style="list-style: none;">
								<a class="nav-link" href="https://sftechbuyer.com/cart.php">
									<i class="fas fa-shopping-bag"></i>
								</a>
							</li>
                            @endauth
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
  <!-- header-section end  -->
@yield('content')

<!-- footer section start -->
<footer class="footer-section">
  <div class="footer-bottom">
    <div class="container">
      <hr>
      <div class="row">
        <div class="col-lg-8 col-md-6 text-md-left text-center">
          <p><p>Copyright © 2023 P&M Electronics All Rights Reserved.</p></p>
        </div>
        <!-- <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
          @php
            $links = getContent('footer_link.element');
          @endphp
          <ul class="link-list justify-content-md-end justify-content-center">
            @foreach($links as $link)
            <li><a href="{{ route('links',[$link->id,slug($link->data_values->title)]) }}">{{ __($link->data_values->title) }}</a></li>
            @endforeach
          </ul>
        </div> -->
      </div>
    </div>
  </div>
</footer>
<!-- footer section end -->

  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/jquery-3.5.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/bootstrap.bundle.min.js') }}"></script>
  <!-- lightcase plugin -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/lightcase.js') }}"></script>
  <!-- custom select js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/jquery.nice-select.min.js') }}"></script>
  <!-- slick slider js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/slick.min.js') }}"></script>
  <!-- scroll animation -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/wow.min.js') }}"></script>
  <!-- dashboard custom js -->
  <script src="{{ asset($activeTemplateTrue.'/js/app.js')}}"></script>
  </body>

@stack('script-lib')


@include('admin.partials.notify')
@include('partials.plugins')
@stack('script')
<script type="text/javascript">
  (function($,document){
        "use strict";
        $(document).on('change', '#langSel', function () {
            var code = $(this).val();
            window.location.href = "{{url('/')}}/change-lang/"+code ;
        });

    })(jQuery,document);
</script>
</body>
</html>
