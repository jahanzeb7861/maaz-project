<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <!-- <title>{{ $general->sitename($page_title) }}</title> -->
       <!-- Required meta tags -->
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords"
    content="Phone Repair,iPod Repair,Cell Phone Unlocking,iPhone Repair,Cell Phone store, iPhone Repair,Sell your Phone, Sell Your Iphone,Buy Phone,Buy Iphone,Sell your Phone  Bakersfield,Sell Your Iphone Clovis ,Bakersfield,Clovis,fresno,Trade in." />
    <meta name="description"
    content="P&M Electronics CELL PHONE STORE iPHONE   REPAIR MAC SELL IPHONE SMARTPHONE COMPUTER REPAIR CLOVIS & BAKERSFIELD CA.s.  SELL NOW . BUYBACKS SELL PHONE" />
    <title>Sell your phone to P&M Electronics Store</title>

    <!-- Jquery Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/bootstrap.min.css') }}"> -->
      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/all.min.css') }}"> -->
      <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/line-awesome.min.css') }}">
      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/lightcase.css') }}"> -->
      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/animate.min.css') }}"> -->
      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/nice-select.css') }}"> -->
      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/slick.css') }}"> -->
      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/main.css') }}"> -->
      <!-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/custom.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ asset(asset($activeTemplateTrue)."
        /css/color.php?color1=$general->base_color&color2=$general->secondary_color") }}"> -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/Validator.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/customs.css') }}">

        <link rel="shortcut icon" href="{{ asset(' ') }}" />
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.matchHeight-min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>



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
  <!-- <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket" aria-hidden="true"></i>
    </span>
  </div> -->
  <!-- scroll-to-top end -->
  <div class="page-wrapper">
      <!-- header-section start  -->
  <!-- <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="left d-flex align-items-center">
              <div class="language">
                <i class="las la-globe-europe"></i>
                <select id="langSel" class="nic-select">
                  @php
                  $langs = App\Language::all();
                  @endphp
                  @foreach($langs as $lang)
                  <option value="{{$lang->code}}" @if(Session::get('lang') === $lang->code) selected  @endif>{{ __($lang->name) }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="right text-sm-right text-center">
              @guest
              <a href="{{ route('user.login') }}"><i class="las la-sign-in-alt"></i> @lang('Login')</a>
              <a href="{{ route('user.register') }}"><i class="las la-user-plus"></i> @lang('Registration')</a>
              @else
              <a href="{{ route('user.home') }}"><i class="las la-user-plus"></i> @lang('Dashboard')</a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="{{ route('home') }}"><img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
              <li><a href="{{ route('home') }}">@lang('Home')</a></li>
              @foreach($pages as $page)
              @if($page->slug != 'home' && $page->slug != 'blog' && $page->slug != 'contact')
              <li><a href="{{ route('home.pages',$page->slug) }}">{{ __($page->name) }}</a></li>
              @endif
              @endforeach
              <li><a href="{{ route('blog') }}">@lang('Blog')</a></li>
            </ul>
            <div class="nav-right">
              <a href="{{ route('contact') }}" class="cmn-btn style--three">@lang('Contact')</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header> -->
  <!-- header-section end  -->

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
                                    <a href="{{ route('user.home') }}"><i class="las la-user-plus"></i> @lang('Dashboard')</a> <br>
                                    <a href="{{ route('user.logout') }}"><i class="las la-sign-out-alt"></i> @lang('Logout')</a>
								</div>
                                @endguest

							</li>
                            @auth
							<li class="nav-item" style="list-style: none;">
								<a class="nav-link" href="https://sftechbuyer.com/cart">
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

@yield('content')


<!-- <footer class="footer-section">
  <div class="footer-bottom">
    <div class="container">
      <hr>
      <div class="row">
        <div class="col-lg-8 col-md-6 text-md-left text-center">
          <p>{{ __(getContent('copyright.content',true)->data_values->copyright) }}</p>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
          @php
            $links = getContent('footer_link.element');
          @endphp
          <ul class="link-list justify-content-md-end justify-content-center">
            @foreach($links as $link)
            <li><a href="{{ route('links',[$link->id,slug($link->data_values->title)]) }}">{{ __($link->data_values->title) }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer> -->

<footer class="main_footer">
		<div id="top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6 col-lg-3 col-md-6">
						<div class="block">
							<div class="footer-logo"><img src="assets/img/PM-Electronics-Logo-for-WordPress-03-1.png"
									alt="P&M ElectronicsStore"></div>
							<!-- <div class="social text-center">
								<h5>Follow us:</h5>
								<ul class="list-inline">
									<li class="list-inline-item"><a class="border-0"
											href="https://www.facebook.com/cellnowstore/" target="_blank"><i
												class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a class="border-0"
											href="https://www.instagram.com/cellnow_store/?hl=en" target="_blank"><i
												class="fab fa-instagram"></i></a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-6 col-lg-3 col-md-6">
						<div class="block">
							<div class="customer_support">
								<h5>Customer support</h5>
								<ul>
									<li><a class="border-0" href="tel:559-349-6073">559-349-6073</a></li>
									<li><a class="border-0" href="mailto:https://sftechbuyer.com">https://sftechbuyer.com</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-6 col-lg-3 col-md-6">
						<div class="block">
							<div class="company">
								<h5></h5>
								<ul>
									<li>
										<a class="" href="https://pmelectronics.net/about-us/" target="_blank">About Us</a>
									</li>
									<li>
										<a class="" href="https://sftechbuyer.com/faqs.php">FAQ</a>
									</li>
									<!-- <li>
										<a class="" href="https://sftechbuyer.com/sale-agreement">Sale
											Agreement</a>
									</li> -->
									<li>
										<a class="" href="https://pmelectronics.net/contact-us/">Contact
											us</a>
									</li>
									<li>
										<a class="" href="https://pmelectronics.net/blog" target="_blank">News</a>
									</li>
									<!-- <li>
										<a class="" href="https://sftechbuyer.com/bulk-order-form">Bulk Sale</a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
					<div class="col-6 col-lg-3 col-md-6">
						<div class="block">
							<div class="marketing-collaboration">
								<h5></h5>
								<ul>
									<li>
										<a class="" href="https://sftechbuyer.com/smartphone">Smartphone</a>
									</li>
									<li>
										<a class="" href="https://sftechbuyer.com/tablet">Tablet</a>
									</li>
									<li>
										<a class="" href="https://sftechbuyer.com/">Smartwatch</a>
									</li>
									<li>
										<a class="" href="https://sftechbuyer.com/">Game Consoles</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="copyright">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="block copyright text-center">
							<p class="mb-0">© P&M Electronics2025 All rights reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

  </div>

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



  <script src="https://www.google.com/recaptcha/api.js?onload=PopupCaptchaCallback&render=explicit"></script>
	<script>
		var PopupCaptchaCallback = function () {
			if (jQuery('#p_rp_g_form_gcaptcha').length) {
				g_c_reset_p_wdt_id = grecaptcha.render('p_rp_g_form_gcaptcha', {
					'sitekey': '6LfOUAQjAAAAANEPRELEebYWO1TIGy2Sacy0V9az',
					'callback': onSubmitFormOfprp,
				});
			}
			if (jQuery('#p_s_g_form_gcaptcha').length) {
				g_c_signup_wdt_id = grecaptcha.render('p_s_g_form_gcaptcha', {
					'sitekey': '6LfOUAQjAAAAANEPRELEebYWO1TIGy2Sacy0V9az',
					'callback': onSubmitFormOfps,
				});
			}
			if (jQuery('#p_c_g_form_gcaptcha').length) {
				g_c_contact_wdt_id = grecaptcha.render('p_c_g_form_gcaptcha', {
					'sitekey': '6LfOUAQjAAAAANEPRELEebYWO1TIGy2Sacy0V9az',
					'callback': onSubmitFormOfpc,
				});
			}
		};

		var onSubmitFormOfprp = function (response) {
			if (response.length == 0) {
				jQuery("#p_rp_g_captcha_token").val('');
			} else {
				jQuery("#p_rp_g_captcha_token").val('yes');
			}
		};
		var onSubmitFormOfps = function (response) {
			if (response.length == 0) {
				jQuery("#p_s_g_captcha_token").val('');
			} else {
				jQuery("#p_s_g_captcha_token").val('yes');
			}
		};
		var onSubmitFormOfpc = function (response) {
			if (response.length == 0) {
				//jQuery('.contact_form_sbmt_btn').prop('disabled', false);
				jQuery("#p_c_g_captcha_token").val('');
			} else {
				jQuery('.contact_form_sbmt_btn').prop('disabled', false);
				//jQuery("#p_c_g_captcha_token").val('yes');
			}
		};
	</script>
	<script type="text/javascript" src="https://sell.cellnowstore.com/social/js/oauthpopup.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			//For Google
			$('.google_auth').oauthpopup({
				path: 'social/social.php?google',
				width: 650,
				height: 350,
			});

			//For Facebook
			$('.facebook_auth').oauthpopup({
				path: 'social/social.php?facebook',
				width: 1000,
				height: 1000,
			});
		});
	</script>

	<script src="https://sell.cellnowstore.com/js/popper.min.js"></script>
	<script src="https://sell.cellnowstore.com/js/bootstrap_4.3.1.min.js"></script>
	<script src="https://sell.cellnowstore.com/js/slick.min.js"></script>
	<script src="https://sell.cellnowstore.com/js/jquery.autocomplete.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" charset="utf8"
		src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://sell.cellnowstore.com/js/intlTelInput.js"></script>
	<script src="https://sell.cellnowstore.com/js/bootstrapvalidator.min.js"></script>

	<script>
		jQuery.noConflict();
		(function ($) {
			$(function () {
				$('.srch_list_of_model').autocomplete({
					serviceUrl: 'https://sell.cellnowstore.com/ajax/get_autocomplete_data.php',
					onSelect: function (suggestion) {
						window.location.href = suggestion.url;
					},
					onHint: function (hint) {
						console.log("onHint");
					},
					onInvalidateSelection: function () {
						console.log("onInvalidateSelection");
					},
					onSearchStart: function (params) {
						console.log("onSearchStart");
					},
					onHide: function (container) {
						console.log("onHide");
					},
					onSearchComplete: function (query, suggestions) {
						console.log("onSearchComplete", suggestions);
					},
					showNoSuggestionNotice: true,
					noSuggestionNotice: "We didn't find any matching devices...",
				});

				$('.block.review-slide.page .card .card-body, .offer-section .card-body').matchHeight();

				$('.home-slide').on('init', function () {
					$('.home-slide').css('visibility', 'visible');
					$('.home-slide-item').css('display', 'block');
				});

				$('.home-slide').slick({
					autoplay: true,
					autoplaySpeed: 3000,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					fade: true,
					dots: false,
					centerMode: true,
				});

				$('input').each(function () {
					$(window).keydown(function (event) {
						if (event.keyCode == 13) {
							return false;
						}
					});
				});

				$('#ac_table_id').DataTable({
					"bFilter": false,
					"bInfo": false,
					"dom": '<"top"i>rt<"bottom"flp><"clear">',
					"aoColumnDefs": [{
						"bSortable": false,
						"aTargets": ["no-sort"]
					}]
				});

				$('#ac_nopage_table_id').DataTable({
					"paging": false,
					"bFilter": false,
					"bInfo": false,
					"dom": '<"top"i>rt<"bottom"flp><"clear">',
					"aoColumnDefs": [{
						"bSortable": false,
						"aTargets": ["no-sort"]
					}]
				});

				if ($('#ac_table_id tr').length < 11) {
					$('.dataTables_paginate').hide();
				}

				$('.menu-toggle').click(function () {
					$('body').toggleClass('menu-active');
				});
				$('.device-info').click(function () {
					var id = $(this).attr('data-id');
					$('.device-info-table-' + id).toggleClass('d-block');
					$('.item-description-' + id).toggleClass('active');
					$(this).toggleClass('info-active');
					if ($(this).hasClass('info-active')) {
						$(this).empty().append('less info');
					} else {
						$(this).empty().append('more info');
					}
				});

				$('#brandSlider').slick({
					slidesToShow: 4,
					slidesToScroll: 4,
					dots: true,
					arrows: false,
					responsive: [{
							breakpoint: 1025,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 767,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
					]
				});
				$('#deviceSlider').slick({
					slidesToShow: 5,
					slidesToScroll: 3,
					dots: true,
					arrows: false,
					responsive: [{
							breakpoint: 1340,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3
							}
						},
						{
							breakpoint: 1200,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 1025,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 900,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
					]
				});

				$('.slider-nav').slick({
					slidesToShow: 4,
					slidesToScroll: 1,
					dots: true,
					focusOnSelect: true,
					arrows: false,
					responsive: [{
							breakpoint: 1340,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3
							}
						},
						{
							breakpoint: 1025,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 767,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
					]
				});

				//repair_appt_date_picker('load');

				//START for check booking available
				$('.we_come_to_you_appt_date').datepicker({
					autoclose: true,
					startDate: "today",
					todayHighlight: true
				}).on('changeDate', function (e) {
					getWeComeToYouTimeSlotListByDate();
				}); //END for check booking available

				$('.datepicker').datepicker({
					autoclose: true
				});

				$('#clk_ftr_signup_btn').click(function () {
					var ftr_signup_email = $("#ftr_signup_email").val();
					var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					if (ftr_signup_email == "") {
						$("#ftr_signup_email").focus();
						return false;
					} else if (!ftr_signup_email.match(mailformat)) {
						$("#ftr_signup_email").focus();
						return false;
					} else {
						$('#newsletter_form').submit();
					}
				});

				$('#popup_clk_ftr_signup_btn').click(function () {
					var popup_ftr_signup_email = $("#popup_ftr_signup_email").val();
					var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					if (popup_ftr_signup_email == "") {
						$("#popup_ftr_signup_email").focus();
						return false;
					} else if (!popup_ftr_signup_email.match(mailformat)) {
						$("#popup_ftr_signup_email").focus();
						return false;
					} else {
						$('#popup_newsletter_form').submit();
					}
				});

				$("#forgot_password_link").click(function () {
					$(".f-login-form").hide();
					$(".f-lost-psw-form").show();
				});
				$("#forgot_password_back").click(function () {
					$(".f-login-form").show();
					$(".f-lost-psw-form").hide();
				});

				$('.track_order_try_again').click(function () {
					$('.track_order_form_showhide').show();
					$('.track_order_not_found_showhide').hide();
				});
				$(document).on('click', '.order_track_login', function () {
					$("#trackOrder").modal('hide');
					$("#trackOrderForm").modal('hide');
					$("#SignInRegistration").modal();
				});
				$('.track_order_form_btn').click(function () {
					var track_order_id = $("#track_order_id").val();
					if (track_order_id == '') {
						$("#track_order_form").addClass('was-validated');
						return false;
					}
					$.ajax({
						type: 'POST',
						url: 'https://sell.cellnowstore.com/ajax/order_track.php',
						data: $('#track_order_form').serialize(),
						success: function (data) {
							if (data != "") {
								var resp_data = JSON.parse(data);
								if (resp_data.error == "not_found" && resp_data.msg != "") {
									$('.track_order_form_showhide').hide();
									$('.track_order_not_found_showhide').show();
									$("#track_order_id").val('');
								} else if (resp_data.error == "found" && resp_data.msg !=
									"") {
									$('.track_order_found_info').html(resp_data.html);
									$("#trackOrder").modal();
									$("#trackOrderForm").modal('hide');
									$("#track_order_id").val('');

									$('#table_id').DataTable({
										"bPaginate": false,
										"paging": false,
										"bFilter": false,
										"bInfo": false,
									});
								}
							}
						}
					});
					return false;
				});

				$('#is_guest').click(function () {
					if ($(this).prop("checked") == true) {
						$(".password-field").hide();
					} else if ($(this).prop("checked") == false) {
						$(".password-field").show();
					}
				});
				$('.signup_form_btn').click(function () {
					var signup_email = $("#signup_email").val();
					var signup_password = $("#signup_password").val();

					var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					var is_guest = document.getElementById('is_guest').checked;
					var p_ac_terms_conditions = document.getElementById('p_ac_terms_conditions').checked;
					if (signup_email == '' || (signup_password == '' && is_guest == false)) {
						$(".f-signup-form").addClass('was-validated');
						return false;
					} else if (!signup_email.match(mailformat)) {
						$(".f-signup-form").addClass('was-validated');
						return false;
					}

					if (p_ac_terms_conditions == false) {
						$(".f-signup-form").addClass('was-validated');
						return false;
					}

					$.ajax({
						type: 'POST',
						url: 'https://sell.cellnowstore.com/ajax/signup.php',
						data: $('.f-signup-form').serialize(),
						success: function (data) {
							if (data != "") {
								var resp_data = JSON.parse(data);
								if (resp_data.status == "invalid" && resp_data.msg != "") {
									$('.f-signup-form-msg').html(resp_data.msg);
									$('.f-signup-form-msg').show();

									if (g_c_signup_wdt_id == '0' || g_c_signup_wdt_id > 0) {
										grecaptcha.reset(g_c_signup_wdt_id);
									}
								} else if (resp_data.status == "success" && resp_data.msg !=
									"") {
									$('.f-signup-form-msg').html(resp_data.msg);
									$('.f-signup-form-msg').show();
									$('.nav-tabs a[href="#home"]').tab('show');
								} else if (resp_data.status == "success_guest" && resp_data
									.msg != "") {
									location.reload(true);
								} else if (resp_data.status == "resend" && resp_data.msg !=
									"") {
									$('.f-signup-form').hide();
									$('.f-verifycode-form').show();
									$('#verifycode_user_id').val(resp_data.user_id);
								}
							}
						}
					});
					return false;
				});
				$('.verifycode_form_btn').click(function () {
					var verification_code = $("#verification_code").val();
					if (verification_code == '') {
						$(".f-verifycode-form").addClass('was-validated');
						return false;
					}
					$.ajax({
						type: 'POST',
						url: 'https://sell.cellnowstore.com/ajax/verify_account.php',
						data: $('.f-verifycode-form').serialize(),
						success: function (data) {
							if (data != "") {
								var resp_data = JSON.parse(data);
								if (resp_data.status == "invalid" && resp_data.msg != "") {
									$('.f-verifycode-form-msg').html(resp_data.msg);
									$('.f-verifycode-form-msg').show();
								} else if (resp_data.status == "success" && resp_data.msg !=
									"") {
									$('.f-signin-form-msg').html(resp_data.msg);
									$('.f-signin-form-msg').show();
									$('.nav-tabs a[href="#home"]').tab('show');
								}
							}
						}
					});
					return false;
				});

				var contact_telInput = $("#contact_cell_phone");
				contact_telInput.intlTelInput({
					initialCountry: "us",
					allowDropdown: false,
					geoIpLookup: function (callback) {
						$.get('https://ipinfo.io', function () {}, "jsonp").always(function (resp) {
							var countryCode = (resp && resp.country) ? resp.country : "";
							callback(countryCode);
						});
					},
					utilsScript: "https://sell.cellnowstore.com/js/intlTelInput-utils.js"
				});


				$('#contact_form').bootstrapValidator({
					fields: {
						name: {
							validators: {
								stringLength: {
									min: 1,
								},
								notEmpty: {
									message: 'Name required'
								}
							}
						},
						cell_phone: {
							validators: {
								callback: {
									message: 'Enter valid phone number',
									callback: function (value, validator, $field) {
										var contact_telInput = $("#contact_cell_phone");
										$("#contact_phone").val(contact_telInput.intlTelInput(
											"getNumber"));
										if (!contact_telInput.intlTelInput("isValidNumber")) {
											return false;
										} else if (contact_telInput.intlTelInput("isValidNumber")) {
											return true;
										}
									}
								}
							}
						},
						email: {
							validators: {
								notEmpty: {
									message: 'Enter email address'
								},
								emailAddress: {
									message: 'Enter valid email address'
								}
							}
						},
						subject: {
							validators: {
								notEmpty: {
									message: 'Enter your subject'
								}
							}
						},
						message: {
							validators: {
								notEmpty: {
									message: 'Enter your message'
								}
							}
						}
					}
					/*,
							submitHandler: function(validator, form, submitButton) {
								//var email = $("#signup_email").val();
								var $captcha = $('#p_c_g_form_gcaptcha'),response = grecaptcha.getResponse();
								if (response.length === 0) {
									//$( '.msg-error').text( "reCAPTCHA is mandatory" );
									alert('reCAPTCHA is mandatory');
									//return false;
								} else {
									//alert("Hiii");
									$('#contact_form').validator('validate');
									form.submit();
									//return true;
								}

							}*/
				}).on('success.form.bv', function (e) {
					$('#contact_form').data('bootstrapValidator').resetForm();

					// Prevent form submission
					e.preventDefault();

					// Get the form instance
					var $form = $(e.target);

					// Get the BootstrapValidator instance
					var bv = $form.data('bootstrapValidator');

					// Use Ajax to submit form data
					$.post($form.attr('action'), $form.serialize(), function (result) {
						console.log(result);
					}, 'json');
				});

			});
		})(jQuery);

		(function () {
			'use strict';
			window.addEventListener('load', function () {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function (form) {
					form.addEventListener('submit', function (event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>

  </body>


</body>
</html>
