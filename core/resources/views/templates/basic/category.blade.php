@extends($activeTemplate .'layouts.master')
@php
$banners = getContent('banner.element');
@endphp

@section('content')

<!-- <section id="select_brand" style="background-color:#fff; padding: 50px 0;">
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="block heading text-center">
            <h3 class="p-5" style="color:#000; font-size: 2em; font-weight: 700;">Choose a brand</h3>
            </div>
            <div class="block brands-slider clearfix">
                <div id="brandSlider" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    @foreach($brands as $brand)
                        <div class="brand" style="flex: 1; text-align: center; margin: 0;">
                            <a href="#">
                                <img src="{{ $brand->image }}" class="img-fluid" alt="" style="max-width: 60%; height: auto;">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> -->


<div class="wsus__author_category mt_95 xs_mt_55 p-5" style="background-color:#3C97D3; margin:0 !important;">
    <div class="container py-3">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="block heading text-center">
                <h3 class="p-5" style="color:#fff; font-size: 2em; font-weight: 700;">Choose a brand</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        @foreach($brands as $brand)
        <a href="{{ url('/' . request()->segment(1) . '/' . $brand->slug) }}" class="col-xl-4 col-sm-6 col-lg-3 text-center my-4 mx-2"
            style="background: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; border-radius: 10px; flex-direction: column; justify-content: center; text-decoration: none;">
            <div class="img">
                <img src="{{ $brand->image }}" style="width: 43% !important; margin: 0 auto;" class="img-fluid">
            </div>
            <h4 class="my-3">{{ $brand->name }}</h4>
        </a>
        @endforeach
        </div>
    </div>
</div>


@endsection
