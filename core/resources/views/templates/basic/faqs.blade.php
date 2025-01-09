
@extends($activeTemplate .'layouts.master')
@php
    $banners = getContent('banner.element');
@endphp

@section('content')


<section class="wsus__download_3 mt_100 xs_mt_80 pt-5"
    style="
        text-align: left;
    ">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xxl-6 col-md-7">
                <div class="wsus__download_text" style="padding: 20px;">
                    <p style="
                        font-size: 1.25rem;
                        margin-bottom: 25px;
                        line-height: 1.6;
                        color: #000;
                    ">
                      Looking to sell your used iPhone, iPad, MacBook, or Samsung device? Get top cash instantly with our hassle-free process! We buy all models, including iPhone 15, iPhone 14, iPhone 13, Samsung Galaxy S23, S22, and more—working or damaged. Fast payouts, no hidden fees, and same-day service guaranteed! Trade your gadgets for cash today and give your old devices a second life while earning money. Contact us now for a free quote and turn your tech into cash effortlessly!
                    </p>
                </div>
            </div>
            <div class="col-xxl-5 col-md-5">
                <div class="wsus__download_img_3">
                    <img src="{{ asset('assets/frontend/images/iphone16.jpg') }}" alt="download"
                     style="width: 85% !important;border-radius: 10px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wsus__faq pt_115 xs_pt_75 pb_120 xs_pb_80">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-12">
                <div class="wsus__faq_text">
                    <h3>Frequently asked questions</h3>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="false"
                                    aria-controls="flush-collapse1">
                                    1. Do you buy broken or damaged devices?
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample" style="">
                                <div class="accordion-body">
                                    <p>Yes! We buy devices in all conditions, including broken screens, battery issues, and cosmetic damage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse2" aria-expanded="false"
                                    aria-controls="flush-collapse2">
                                    2. How do I get a quote for my device?
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>You can get a free quote by sharing your device model and condition through our website or in-store.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse3" aria-expanded="false"
                                    aria-controls="flush-collapse3">
                                    3. How quickly will I get paid?
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>You’ll receive cash instantly after completing the trade-in process. No delays!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse4" aria-expanded="false"
                                    aria-controls="flush-collapse4">
                                    4. Do I need to reset my device before selling?
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, we recommend backing up your data and performing a factory reset to protect your personal information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse5" aria-expanded="false"
                                    aria-controls="flush-collapse5">
                                    5. Can I trade multiple devices at once?
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Absolutely! You can sell multiple gadgets in a single transaction and maximize your earnings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse6" aria-expanded="false"
                                    aria-controls="flush-collapse6">
                                    6. Where are you located?
                                </button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>P&M Electronics Located at - 4141 Manzanita Ave #125 Carmichael, CA 95608</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse7" aria-expanded="false"
                                    aria-controls="flush-collapse7">
                                    7. What if my device isn't listed?
                                </button>
                            </h2>
                            <div id="flush-collapse7" class="accordion-collapse collapse "
                                aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>We buy most electronics! Contact us, and we’ll be happy to check your device. (Contact Us Link With https://pmelectronics.net/contact)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


