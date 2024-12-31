@extends($activeTemplate .'layouts.master')
@php
$banners = getContent('banner.element');
@endphp

@section('content')

<section class="wsus__download_3 mt_100 xs_mt_80 pt_120 xs_pt_80 pb_120 xs_pb_80"
    style="background: url({{ asset('assets/frontend/images/cover_photo.jpg') }});">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xxl-6 col-md-7">
                <div class="wsus__download_text">
                    <h2>Sell your Electronics in a few minutes!</h2>
                    <p>Get the most CASH for your Device</p>
                    <ul class="d-flex flex-wrap">
                        <!-- <li>
                            <a href="#" class="common_btn">View All <i
                                    class="far fa-long-arrow-right" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="#">Go to Offer
                                page</a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-xxl-5 col-md-5">
                <div class="wsus__download_img_3">
                    <img src="{{ asset('assets/frontend/images/mobile-bg.png') }}" alt="download"
                        class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
</section>



<div class="wsus__author_category mt_95 xs_mt_55 p-5" style="background-color:#1A84C4; margin:0 !important;">
    <div class="container py-3">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="wsus__section_heading mb_25">
                    <h3 class="text-white">Choose your device's category to calculate best offer:</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-2 col-sm-6 col-lg-3 text-center my-4  mx-2"
                style="    background: #fff;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);padding: 20px;display: flex;border-radius: 10px;flex-direction: column;justify-content: center;">
                <div class="img">
                    <img src="https://sell.cellnowstore.com/images/categories/20191014045233.png"
                        style="width: 20% !important; margin: 0 auto;" class="img-fluid">
                </div>
                <h4 class="my-3">Smart Phones</h4>
            </div>
            <div class="col-xl-2 col-sm-6 col-lg-3 text-center my-4  mx-2"
                style="    background: #fff;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);padding: 20px;display: flex;border-radius: 10px;flex-direction: column;justify-content: center;">
                <div class="img">
                    <img src="https://sell.cellnowstore.com/images/categories/20191012125938.png"
                        style="width: 20% !important; margin: 0 auto;" class="img-fluid">
                </div>
                <h4 class="my-3">Tablets</h4>
            </div>
            <div class="col-xl-2 col-sm-6 col-lg-3 text-center my-4  mx-2"
                style="    background: #fff;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);padding: 20px;display: flex;border-radius: 10px;flex-direction: column;justify-content: center;">
                <div class="img">
                    <img src="https://sell.cellnowstore.com/images/categories/20191012130006.png"
                        style="width: 20% !important; margin: 0 auto;" class="img-fluid">
                </div>
                <h4 class="my-3">Smart Watches</h4>
            </div>
            <div class="col-xl-2 col-sm-6 col-lg-3 text-center my-4  mx-2"
                style="    background: #fff;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);padding: 20px;display: flex;border-radius: 10px;flex-direction: column;justify-content: center;">
                <div class="img">
                    <img src="https://sell.cellnowstore.com/images/categories/20210829013733.png"
                        style="width: 20% !important; margin: 0 auto;" class="img-fluid">
                </div>
                <h4 class="my-3">Headphones</h4>
            </div>
            <div class="col-xl-2 col-sm-6 col-lg-3 text-center my-4  mx-2"
                style="    background: #fff;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);padding: 20px;display: flex;border-radius: 10px;flex-direction: column;justify-content: center;">
                <div class="img">
                    <img src="https://sell.cellnowstore.com/images/categories/20191012130114.png"
                        style="width: 20% !important; margin: 0 auto;" class="img-fluid">
                </div>
                <h4 class="my-3">Game Console</h4>
            </div>
        </div>
    </div>
</div>



<section class="wsus__why_choose_3 wsus__why_choose_2 pt_115 xs_pt_75 pb_115 xs_pb_75">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <div class="wsus__section_heading mb_15">
                    <h2>Why Choose Us?</h2>
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
                    <h4>We have the best payouts for used and new electronics</h4>
                    <p>Get the Cash you deserve for your device today.</p>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-lg-4">
                <div class="wsus__why_choose_item center">
                    <div class="img">
                        <img src="{{ asset('assets/frontend/images/why_choose_icon_8.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4>Our system is easy and safe to use</h4>
                    <p>Can't come to our store? Just mail in your device and we will pay you when we receive your
                        device.</p>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-lg-4">
                <div class="wsus__why_choose_item last">
                    <div class="img">
                        <img src="{{ asset('assets/frontend/images/why_choose_icon_9.png') }}" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4>Our onlime system is available 24/7</h4>
                    <p>You can get quotes at any time using our website.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="wsus__why_choose pt_115 xs_pt_75 pb_120 xs_pb_80"
    style="background: url({{ asset('assets/frontend/images/bg-2.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <div class="wsus__section_heading mb_25">
                    <h2 class="text-white">It's As Easy As 1, 2, 3.</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-3 col-md-4">
                <div class="wsus__why_choose_item p-0">
                    <div class="img" style="border-radius: 0px !important; width:100%; height: 100%;">
                        <img src="https://sell.cellnowstore.com/images/section/120191014072442.png" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4 class="text-white">Choose the deivce that you have for sale</h4>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="wsus__why_choose_item center p-0">
                    <div class="img" style="border-radius: 0px !important; width:100%; height: 100%;">
                        <img src="https://sell.cellnowstore.com/images/section/220191014072442.png" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4 class="text-white">Answer a few questions about your device</h4>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="wsus__why_choose_item last p-0">
                    <div class="img" style="border-radius: 0px !important; width:100%; height: 100%;">
                        <img src="https://sell.cellnowstore.com/images/section/320191014072442.png" alt="why choose"
                            class="img-fluid w-100">
                    </div>
                    <h4 class="text-white">Get an Offer Instantly for your device</h4>
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
