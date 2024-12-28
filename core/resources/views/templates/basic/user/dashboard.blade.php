@extends($activeTemplate .'layouts.user')
@section('content')

<div class="container p-5 d-flex flex-column" style="min-height: 75vh !important;">
<div class="row mt-4 flex-grow-1">
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="true">
                <i class="fas fa-shopping-cart mr-2"></i>@lang('My Orders')
            </a>
            <a class="nav-link" id="v-pills-support-tab" data-toggle="pill" href="#v-pills-support" role="tab" aria-controls="v-pills-support" aria-selected="false">
                <i class="fas fa-headset mr-2"></i>Support
            </a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <i class="fas fa-user mr-2"></i>Profile
            </a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                <!-- Content for My Orders -->
                 <h1>ORDERS SHOW HERE</h1>
            </div>
            <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab">
                <!-- Content for Coupon -->
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <!-- Content for Statistics -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    (function ($) {
        "use strict";
        // apex-bar-chart js
        var options = {
            series: [{
                name: 'Clicks',
                data: [
                    @foreach($chart['click'] as $key => $click) {
                        {
                            $click
                        }
                    },
                    @endforeach
                ]
            }, {
                name: 'Earn Amount',
                data: [
                    @foreach($chart['amount'] as $key => $amount) {
                        {
                            $amount
                        }
                    },
                    @endforeach
                ]
            }],
            chart: {
                type: 'bar',
                height: 580,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: [
                    @foreach($chart['amount'] as $key => $amount)
                    '{{ $key }}',
                    @endforeach
                ],
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
        chart.render();

        function createCountDown(elementId, sec) {
            var tms = sec;
            var x = setInterval(function () {
                var distance = tms * 1000;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML = days + "d: " + hours + "h " + minutes +
                    "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                }
                tms--;
            }, 1000);
        }
        createCountDown('counter', {
            {
                \
                Carbon\ Carbon::tomorrow() - > diffInSeconds()
            }
        });
    })(jQuery);

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var adsSlider = document.getElementById('adsSlider');
        var adSlides = document.querySelectorAll('.ad-slide');
        var currentIndex = 0;

        function showSlide(index) {
            adSlides.forEach(function (slide, i) {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % adSlides.length;
            showSlide(currentIndex);
        }

        // Set interval for auto-sliding
        setInterval(nextSlide, 3000); // Change 3000 to your desired interval in milliseconds

        // Initial slide
        showSlide(currentIndex);
    });
</script>

@endpush
