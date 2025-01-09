@extends($activeTemplate .'layouts.master')
@php
$banners = getContent('banner.element');
@endphp

@section('content')

<section class="wsus__download_3 mt_100 xs_mt_80 pt_120 xs_pt_80 pb_120 xs_pb_80"
    style="
        background: url({{ asset('assets/frontend/images/background.jpg') }}) no-repeat center center / cover;
        color: #fff;
        text-align: left;
    ">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xxl-6 col-md-7">
                <div class="wsus__download_text" style="padding: 20px;">
                    <h2 style="
                        font-size: 2.5rem;
                        font-weight: 700;
                        margin-bottom: 15px;
                        line-height: 1.3;
                    ">
                        Trade Your Old iPhones, iPads, and MacBooks for Cash in Minutes!
                    </h2>
                    <!--<p style="-->
                    <!--    font-size: 1.25rem;-->
                    <!--    margin-bottom: 25px;-->
                    <!--    line-height: 1.6;-->
                    <!--">-->
                    <!--   READY TO GET PAID? <br>-->
                    <!--   Let’s Get Started!-->
                    <!--</p>-->
                    <!-- <ul class="d-flex flex-wrap" style="gap: 15px;">
                        <li>
                            <a href="#" class="common_btn" style="
                                padding: 10px 20px;
                                font-size: 1rem;
                                font-weight: 600;
                                background-color: #007bff;
                                color: #fff;
                                border-radius: 8px;
                                text-decoration: none;
                                transition: all 0.3s ease-in-out;
                            ">
                                View All <i class="far fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#" style="
                                padding: 10px 20px;
                                font-size: 1rem;
                                font-weight: 600;
                                background-color: #28a745;
                                color: #fff;
                                border-radius: 8px;
                                text-decoration: none;
                                transition: all 0.3s ease-in-out;
                            ">
                                Go to Offer Page
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-xxl-5 col-md-5">
                <div class="wsus__download_img_3">
                    <img src="{{ asset('assets/frontend/images/mobile-mockups.png') }}" alt="download"
                     style="width: 120% !important;border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>



<div class="wsus__author_category mt_95 xs_mt_55 p-5" style="background: url({{ asset('assets/frontend/images/2nd-banner-backgrund.jpg') }}) no-repeat center center / cover; margin:0 !important;">
    <div class="container py-3">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="wsus__section_heading mb_25">
                    <!--<h3 class="text-white">Choose your device's category to calculate best offer:</h3>-->
                    <h3 class="text-dark">READY TO GET PAID?</h3>
                      <p class="text-dark"> Let’s Get Started!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        @foreach($categories as $category)
        <a href="{{ route('category.show', ['slug' => $category->slug]) }}" class="col-xl-2 col-sm-6 col-lg-3 text-center my-4 mx-2"
            style="background: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; border-radius: 10px; flex-direction: column; justify-content: center; text-decoration: none;">
            <div class="img">
                <img src="{{ $category->image }}" style="width: 20% !important; margin: 0 auto;" class="img-fluid">
            </div>
            <h4 class="my-3">{{ $category->name }}</h4>
        </a>
        @endforeach
        </div>
    </div>
</div>



<section class="wsus__why_choose_3 wsus__why_choose_2 pt_115 xs_pt_75 pb_115 xs_pb_75" id="why-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <div class="wsus__section_heading mb_15">
                    <h2>Why Choose Us?</h2>
                    <p>💰 Sell your device with confidence today!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-4 col-sm-6 col-lg-4">
                <div class="wsus__why_choose_item">
                    <div class="img">
                        <img src="{{ asset('assets/frontend/images/why_choose_icon_7.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4>✅ Top Dollar Offers:</h4>
                    <p>Get the highest cash payouts for your used devices, guaranteed.</p>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-lg-4">
                <div class="wsus__why_choose_item center">
                    <div class="img">
                        <img src="{{ asset('assets/frontend/images/why_choose_icon_8.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4>✅ Fast & Hassle-Free Process:</h4>
                    <p>Sell your gadgets in just a few minutes—quick, simple, stress-free.</p>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-lg-4">
                <div class="wsus__why_choose_item last">
                    <div class="img">
                        <img src="{{ asset('assets/frontend/images/why_choose_icon_9.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4>✅ All Devices Accepted:</h4>
                    <p>We buy iPhones, iPads, MacBooks, Samsung phones, gaming consoles, and more!</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="wsus__why_choose pt_115 xs_pt_75 pb_120 xs_pb_80" id="how-it-works"

style="background: url({{ asset('assets/frontend/images/3rd-banner-backgrund.jpg') }}) no-repeat center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <div class="wsus__section_heading mb_25">
                    <h2 class="text-white">Sell Your Device in 3 Easy Steps:</h2>
                    <p class="text-white">Start Trading Your Devices Today!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-3 col-md-4">
                <div class="wsus__why_choose_item p-0">
                    <div class="img" style="border-radius: 0px !important; width:100%; height: 100%;">
                        <img src="{{ asset('assets/frontend/images/leptop.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4 class="text-white">Step 1: Get a Free Quote</h4>
                    <p class="text-white">Tell us your device model and condition for an instant cash offer.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="wsus__why_choose_item center p-0">
                    <div class="img" style="border-radius: 0px !important; width:100%; height: 100%;">
                        <img src="{{ asset('assets/frontend/images/mob.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4 class="text-white">Step 2: Drop Off or Ship</h4>
                    <p class="text-white">Bring your device to our store or choose a secure shipping option.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="wsus__why_choose_item last p-0">
                    <div class="img" style="border-radius: 0px !important; width:100%; height: 100%;">
                        <img src="{{ asset('assets/frontend/images/cash.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4 class="text-white">Step 3: Get Paid Instantly</h4>
                    <p class="text-white">Receive top cash on the spot—fast, easy, and hassle-free!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="select_brand" style="background-color:#fff; padding: 50px 0;">
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="block heading text-center">
                <h3 class="pb-3" style="color:#000; font-size: 2em; font-weight: 700;">We also purchase:</h3>
            </div>
            <div class="block brands-slider clearfix">
                <div id="brandSlider" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="brand" style="flex: 1; text-align: center;"><a href="https://sftechbuyer.com/apple"><img
                                src="https://sell.cellnowstore.com/images/brand/20191014112824.png" class="img-fluid"
                                alt="" style="max-width: 80%; height: auto;"></a></div>
                    <div class="brand" style="flex: 1; text-align: center;"><a
                            href="https://sftechbuyer.com/samsung"><img
                                src="https://sell.cellnowstore.com/images/brand/20191014112851.png" class="img-fluid"
                                alt="" style="max-width: 80%; height: auto;"></a></div>
                    <div class="brand" style="flex: 1; text-align: center;"><a href="https://sftechbuyer.com/sony"><img
                                src="https://sell.cellnowstore.com/images/brand/20191014113050.png" class="img-fluid"
                                alt="" style="max-width: 80%; height: auto;"></a></div>
                    <div class="brand" style="flex: 1; text-align: center;"><a
                            href="https://sftechbuyer.com/nintendo"><img
                                src="https://sell.cellnowstore.com/images/brand/20201119023746.png" class="img-fluid"
                                alt="" style="max-width: 80%; height: auto;"></a></div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
