@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')

<section class="cmn-section">
    <div class="container">
        <div class="row cmn-text">
            <div class="col-md-4 mb-30">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-shopping-cart overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2 class="bal">{{ $user->balance + 0 }} </h2>
                        <p>@lang('My Orders')</p>
                    </div>
                </div><!-- widget-two end -->
            </div>
            <div class="col-md-4 mb-30">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-tags overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2 class="">{{ __($user->plan ? $user->plan->name : 'Coupon') }}</h2>
                    </div>
                </div><!-- widget-two end -->
            </div>
            <div class="col-md-4 mb-30">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-tags overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="widget-two__content">
                        <h2 class="">Statistics</h2>
                    </div>
                </div><!-- widget-two end -->
            </div>

        </div>
    </div>
</section>
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
