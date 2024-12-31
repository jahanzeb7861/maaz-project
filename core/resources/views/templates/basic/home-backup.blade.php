
@extends($activeTemplate .'layouts.master')
@php
    $banners = getContent('banner.element');
@endphp

@section('content')
    <!-- hero-section start -->
    <!-- <section class="hero">
      <div class="hero__slider">
        @foreach($banners as $banner)
        <div class="single__slide bg_img" data-background="{{ asset('assets/images/frontend/banner/'.$banner->data_values->image) }}">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="hero__content text-center">
                  <h2 class="hero__title" data-animation="fadeInUp" data-delay=".3s">{{ __($banner->data_values->heading) }}</h2>
                  <p data-animation="fadeInUp" data-delay=".5s">{{ __($banner->data_values->subheading) }}</p>
                  <div class="btn-group mt-40" data-animation="fadeInUp" data-delay=".7s">
                    <a href="{{ $banner->data_values->button_1_url }}" class="cmn-btn">{{ __($banner->data_values->button_1) }}</a>
                    <a href="{{ $banner->data_values->button_2_url }}" class="cmn-btn">{{ __($banner->data_values->button_2) }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section> -->



	<section id="showcase" class="py-5" style="background-image: linear-gradient(rgb(159 138 138 / 50%), rgb(0 0 0 / 50%)), url(https://sell.cellnowstore.com/images/section/220210217221431.png);background-size: contain;background-repeat: no-repeat;padding :6rem !important">
		<div class="container">
			<div class="home-slide">
				<div class="home-slide-item">
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6 col-lg-6 col-xl-6">
							<div class="showcase-text text-center">
								<h1 class="text-light display-4">Sell your Electronics</h1>
								<h2 class="text-light"><span>in a few minutes</span></h2>
								<p class="text-light lead">Get the most CASH for your Device</p>
								<div class="mt-4 d-flex justify-content-center">
									<a href="https://sftechbuyer.com/sell"
										class="btn btn-lg btn-outline-light mr-3">Sell my Device</a>
									<a href="https://cellnowstore.com/shop-grid-3-col"
										class="btn btn-lg btn-outline-light mr-3" target="_blank">Buy a Device</a>
									<a href="https://fix.cellnowstore.com/repairs" class="btn btn-lg btn-outline-light"
										target="_blank">Fix a Device</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- <section id="showCategory" class="pb-5" style="background-color:#61818a;"> -->
	<section id="showCategory" class="pb-5" style="background-color:#1A84C4;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="block heading text-center" id="sellSection">
						<h3 class="pb-3 text-white">Choose your device's category to calculate best offer:</h3>
					</div>
					<div class="block devices h_img clearfix">
						<div class="row category justify-content-center">
							<div class="col-md-4 col-sm-6 col-xl-3 col-lg-3 col-12 mb-4">
								<a href="smartphone" class="card text-center rounded d-flex justify-content-center align-items-center" style="border-radius: 50px !important;">
									<img src="https://sell.cellnowstore.com/images/categories/20191014045233.png"
											alt="Smartphone" class="img-fluid rounded-top">
									<h5 class="text-dark">Smartphone</h5>
								</a>
							</div>
							<div class="col-md-4 col-sm-6 col-xl-3 col-lg-3 col-12 mb-4">
								<a href="tablet" class="card text-center rounded d-flex justify-content-center align-items-center" style="border-radius: 50px !important;">
									<img src="https://sell.cellnowstore.com/images/categories/20191012125938.png"
											alt="Tablet" class="img-fluid rounded-top">
									<h5 class="text-dark">Tablet</h5>
								</a>
							</div>
							<div class="col-md-4 col-sm-6 col-xl-3 col-lg-3 col-12 mb-4">
								<a href="smartwatch" class="card text-center rounded d-flex justify-content-center align-items-center" style="border-radius: 50px !important;">
									<img src="https://sell.cellnowstore.com/images/categories/20191012130006.png"
											alt="SmartWatch" class="img-fluid rounded-top">
									<h5 class="text-dark">SmartWatch</h5>
								</a>
							</div>
							<div class="col-md-4 col-sm-6 col-xl-3 col-lg-3 col-12 mb-4">
								<a href="headphones-airpods" class="card text-center rounded d-flex justify-content-center align-items-center" style="border-radius: 50px !important;">
									<img src="https://sell.cellnowstore.com/images/categories/20210829013733.png"
											alt="Headphones" class="img-fluid rounded-top">
									<h5 class="text-dark">Headphones</h5>
								</a>
							</div>
							<div class="col-md-4 col-sm-6 col-xl-3 col-lg-3 col-12 mb-4">
								<a href="game-console" class="card text-center rounded d-flex justify-content-center align-items-center" style="border-radius: 50px !important;">
									<img src="https://sell.cellnowstore.com/images/categories/20191012130114.png"
											alt="Game Console" class="img-fluid rounded-top">
									<h5 class="text-dark">Game Console</h5>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section id="deviceSection" class="pt-0" style="background-color:#F5F5F5;">
		<a name="device-section"></a>
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-6 col-xl-4">
					<div class="block calculate-cost clearfix">
						<img src="https://sell.cellnowstore.com/images/white-logo-symbol.png" alt="">
						<h3 style="color:#FFFFFF !important;">Choose your device to<span> calculate its value:</span>
						</h3>
						<form class="form-inline" action="https://sell.cellnowstore.com/search" method="post">
							<div class="form-group">
								<input type="text" name="search"
									class="form-control border-bottom border-top-0 border-right-0 border-left-0 center mx-auto srch_list_of_model"
									id="autocomplete" placeholder="Search for your device here..."
									style="color:#000000 !important;">
								<button type="button" class="btn btn-clear" id="ftr_signup_btn"><i
										class="fas fa-arrow-right"></i></button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6 col-xl-8">
					<div id="deviceSlider" class="device-slider">
						<div class="device">
							<a href="switch">
								<img src="https://sell.cellnowstore.com/images/device/20201119021240.png"
									class="img-fluid" alt="Switch">
							</a>
							<h5 style="color:#000000 !important;">Switch</h5>
						</div>
						<div class="device">
							<a href="playstation">
								<img src="https://sell.cellnowstore.com/images/device/20201205224227.png"
									class="img-fluid" alt="Playstation">
							</a>
							<h5 style="color:#000000 !important;">Playstation</h5>
						</div>
						<div class="device">
							<a href="apple-iphone">
								<img src="https://sell.cellnowstore.com/images/device/20191116141643.png"
									class="img-fluid" alt="iPhone">
							</a>
							<h5 style="color:#000000 !important;">iPhone</h5>
						</div>
						<div class="device">
							<a href="ipad">
								<img src="https://sell.cellnowstore.com/images/device/20210217221520.png"
									class="img-fluid" alt="iPad">
							</a>
							<h5 style="color:#000000 !important;">iPad</h5>
						</div>
						<div class="device">
							<a href="apple-watch">
								<img src="https://sell.cellnowstore.com/images/device/20210217220608.png"
									class="img-fluid" alt="Apple Watch">
							</a>
							<h5 style="color:#000000 !important;">Apple Watch</h5>
						</div>
						<div class="device">
							<a href="airpods">
								<img src="https://sell.cellnowstore.com/images/device/20191014050353.png"
									class="img-fluid" alt="AirPods">
							</a>
							<h5 style="color:#000000 !important;">AirPods</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->




	<section id="select_brand" style="background-color:#fff; padding: 50px 0;">
		<div class="container">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="block heading text-center">
					<h3 class="pb-3" style="color:#000; font-size: 2em; font-weight: 700;">We also purchase:</h3>
				</div>
				<div class="block brands-slider clearfix">
					<div id="brandSlider" style="display: flex; justify-content: space-between; align-items: center;">
						<div class="brand" style="flex: 1; text-align: center;"><a href="https://sftechbuyer.com/apple"><img
									src="https://sell.cellnowstore.com/images/brand/20191014112824.png" class="img-fluid" alt="" style="max-width: 80%; height: auto;"></a></div>
						<div class="brand" style="flex: 1; text-align: center;"><a href="https://sftechbuyer.com/samsung"><img
									src="https://sell.cellnowstore.com/images/brand/20191014112851.png" class="img-fluid" alt="" style="max-width: 80%; height: auto;"></a></div>
						<div class="brand" style="flex: 1; text-align: center;"><a href="https://sftechbuyer.com/sony"><img
									src="https://sell.cellnowstore.com/images/brand/20191014113050.png" class="img-fluid" alt="" style="max-width: 80%; height: auto;"></a></div>
						<div class="brand" style="flex: 1; text-align: center;"><a href="https://sftechbuyer.com/nintendo"><img
									src="https://sell.cellnowstore.com/images/brand/20201119023746.png" class="img-fluid" alt="" style="max-width: 80%; height: auto;"></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="home-custom-section " id="" style="background-color:#000000;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="block heading text-center mt-0 mb-0">
						<h3 class="feature-title" style="color:#FFFFFF !important;">Questions? Answers.</h3>
					</div>
					<div class="text-center mb-3" style="color:#FFFFFF !important;">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#contactusForm"
							class="btn btn-primary btn-lg mr-0 my-2">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="whyChoose" style="background-color:#FFFFFF;">
		<a name="why-us"></a>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block heading text-center clearfix">
						<h3 style="color:#000000 !important;">Why Choose Us?</h3>
					</div>
					<div class="block why-choose">
						<div class="card-group">

							<div class="card">
								<div class="card-body">
									<img src="https://sell.cellnowstore.com/images/section/120191014071821.png" class="img-fluid" alt="">
									<h5 class="card-title" style="color:#000000 !important;">We have the best payouts
										for used and new electronics</h5>
									<p style="color:#000000 !important;">Get the Cash you deserve for your device today.
									</p>
								</div>
							</div>

							<div class="card">
								<div class="card-body">
									<img src="https://sell.cellnowstore.com/images/section/220191014071821.png" class="img-fluid" alt="">
									<h5 class="card-title" style="color:#000000 !important;">Our system is easy and safe
										to use </h5>
									<p style="color:#000000 !important;">Can't come to our store? Just mail in your
										device and we will pay you when we receive your device.</p>
								</div>
							</div>

							<div class="card">
								<div class="card-body">
									<img src="https://sell.cellnowstore.com/images/section/320191014071821.png" class="img-fluid" alt="">
									<h5 class="card-title" style="color:#000000 !important;">Our onlime system is
										available 24/7</h5>
									<p style="color:#000000 !important;">You can get quotes at any time using our
										website. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <section id="how-it-works" style="background-color:#5CCC7C;"> -->
	<section id="how-it-works" style="background-color:#2F2F8A;">
		<a name="how-it-works"></a>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block heading black text-center clearfix">
						<h3 style="color:#FFFFFF !important;">It's As Easy As 1, 2, 3.</h3>
					</div>
					<div class="block easy-steps clearfix">
						<div class="card-group">

							<div class="card border-0">
								<div class="card-body">
									<div class="image laptop"><img src="https://sell.cellnowstore.com/images/section/120191014072442.png"
											class="img-fluid" alt=""></div>
									<h5 class="card-title" style="color:#FFFFFF !important;">Choose the deivce that you
										have for sale </h5>
									<p style="color:#FFFFFF !important;">We buy hundreds of different models and
										devices.</p>
								</div>
							</div>

							<div class="card border-0">
								<div class="card-body">
									<div class="image "><img src="https://sell.cellnowstore.com/images/section/220191014072442.png" class="img-fluid"
											alt=""></div>
									<h5 class="card-title" style="color:#FFFFFF !important;">Answer a few questions
										about your device</h5>
									<p style="color:#FFFFFF !important;">This will only take a minute.</p>
								</div>
							</div>

							<div class="card border-0">
								<div class="card-body">
									<div class="image "><img src="https://sell.cellnowstore.com/images/section/320191014072442.png" class="img-fluid"
											alt=""></div>
									<h5 class="card-title" style="color:#FFFFFF !important;">Get an Offer Instantly for
										your device</h5>
									<p style="color:#FFFFFF !important;">Bring the phone to our stores or just mail it
										to us for free.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="home-custom-section readyStart" id="readyStart" style="background-color:#F5F5F5;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="block heading text-center">
						<h3 class="feature-title" style="color:#000000 !important;">Ready to start? Find out<br>what
							your device is worth today!</h3>
						<div class="subtitlebox" style="color:#000000 !important;">
							<p class="py-4">It's simple fast and free, try it now</p>
							<a href="#sellSection" class="btn btn-primary btn-lg mr-0 my-2">Calculate price now</a>
						</div>
					</div>
					<div style="color:#000000 !important;">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <section id="review" style="background-color:#000000;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="block heading pb-0 dark text-center">
						<h3 class="mb-0" style="color:#FFFFFF !important;">Reviews</h3>
					</div>
					<div class="block review-slide">
						<div class="row slider-nav">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035404.png"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Sonny Dunbar </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">They give top dollar for phones.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035413.png"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Shelby Stewart </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">Very professional! Amazing customer
													service! And they have the best prices if you’re selling a phone.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035421.png"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Grace Ballard </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">Definitely a great place! I sold an
													old iPhone XR and they gave me a great price.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035427.png"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Sam Muth </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">I would recommend this store over
													any pawn shop in Bakersfield. All pawn shops tend to low ball
													customers but <a href="javascript;" data-toggle="modal"
														data-target="#reviewModal82">Read More</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035436.jpg"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Raymond Garcia </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">Very fair prices and I do believe
													the biggest payout for ur devices! I recommend this place also
													because the <a href="javascript;" data-toggle="modal"
														data-target="#reviewModal81">Read More</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035441.png"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Amber Martinez </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">Been selling and buying from here
													for years great place, they have fair prices and also pay good when
													you <a href="javascript;" data-toggle="modal"
														data-target="#reviewModal80">Read More</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035447.jpg"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Ryder Jo </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">These guys have WONDERFUL costomer
													service. Always willing to help out & answer any questions.. id
													recommend them without hesitation <a href="javascript;"
														data-toggle="modal" data-target="#reviewModal79">Read More</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="image"><img
													src="https://sell.cellnowstore.com/images/review/20221118035451.png"
													class="rounded-circle"></div>
											<div class="col-12">
												<div class="media">
													<div class="media-body">
														<h4 style="color:#FFFFFF !important;">Edward Woods </h4>
													</div>
												</div>
											</div>
											<div class="col-12">
												<p style="color:#FFFFFF !important;">I moved out here from the Bay area
													about 5 years ago and as a business owner I have switched <a
														href="javascript;" data-toggle="modal"
														data-target="#reviewModal78">Read More</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<div class="modal fade" id="reviewModal82" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel82"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reviewModalLabel82">Sam Muth</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pt-0">
					<p>I would recommend this store over any pawn shop in Bakersfield. All pawn shops tend to low ball
						customers but this place worked with me on giving me top dollar on my lap top and IPhone over
						any other store</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="reviewModal81" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel81"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reviewModalLabel81">Raymond Garcia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pt-0">
					<p>Very fair prices and I do believe the biggest payout for ur devices! I recommend this place also
						because the staff is always friendly and willing to answer many of ur questions. I'm pretty sure
						98% noone else pays more for ur devices.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="reviewModal80" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel80"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reviewModalLabel80">Amber Martinez</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pt-0">
					<p>Been selling and buying from here for years great place, they have fair prices and also pay good
						when you sell them. Would highly recommend coming to them all staff is very friendly.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="reviewModal79" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel79"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reviewModalLabel79">Ryder Jo</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pt-0">
					<p>These guys have WONDERFUL costomer service. Always willing to help out & answer any questions..
						id recommend them without hesitation every time... ROCK STARS !!!!!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="reviewModal78" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel78"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reviewModalLabel78">Edward Woods</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pt-0">
					<p>I moved out here from the Bay area about 5 years ago and as a business owner I have switched cell
						phone providers a time or 2 I have been to a number of cell phone stores over the years and have
						never been treated this nicely and with respect as the gentleman at the store had treated me!!!
						Now the same attitude and respect given over the phone was received in the store I look forward
						to doing more business with them in the near future and think you should also!!!</p>
				</div>
			</div>
		</div>
	</div>




@endsection


