@extends('admin.layouts.app')

@section('panel')
@if(@json_decode($general->sys_version)->version > systemDetails()['version'])
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">
                        <h3 class="card-title"> @lang('New Version Available') <button class="btn btn--dark float-right">@lang('Version') {{json_decode($general->sys_version)->version}}</button> </h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-dark">@lang('What is the Update ?')</h5>
                        <p><pre  class="f-size--24">{{json_decode($general->sys_version)->details}}</pre></p>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if(@json_decode($general->sys_version)->message)
        <div class="row">
            @foreach(json_decode($general->sys_version)->message as $msg)
            <div class="col-md-12">
                <div class="alert border border--primary" role="alert">
                  <div class="alert__icon bg--primary"><i class="far fa-bell"></i></div>
                  <p class="alert__message">@php echo $msg; @endphp</p>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <div class="row mb-none-30 justify-content-center">
        <div class="col-xl-4 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-1 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$widget['total_users']}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Users')</span>
                    </div>
                    <a href="{{route('admin.users.all')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-4 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-6 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$widget['verified_users']}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Verified Users')</span>
                    </div>
                    <a href="{{route('admin.users.active')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-42 b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="la la-envelope"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$widget['email_unverified_users']}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Email Unverified Users')</span>
                    </div>

                    <a href="{{route('admin.users.emailVerified')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-4 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-42 b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="la la-envelope"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$widget['pending_orders']}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">New Queries</span>
                    </div>

                    <a href="{{route('admin.order.pending')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-4 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-42 b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="la la-envelope"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$widget['completed_orders']}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">Completed Queries</span>
                    </div>

                    <a href="{{route('admin.order.completed')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <!-- <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-21 b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$widget['sms_unverified_users']}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total SMS Unerified Users')</span>
                    </div>

                    <a href="{{route('admin.users.smsVerified')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div> -->
        <!-- dashboard-w1 end -->

    </div><!-- row end-->


    <!-- <div class="row mt-50 mb-none-30">
        <div class="col-xl-6 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">@lang('Monthly  Deposit & Withdraw  Report')</h5>
                    <div id="apex-bar-chart"> </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-30">
            <div class="row mb-none-30">
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--primary box--shadow2">
                            <i class="las la-wallet "></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers">{{$payment['payment_method']}}</h2>
                            <p  class="text--small">@lang('Total Payment Method')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--pink  box--shadow2">
                            <i class="las la-money-bill "></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers">{{getAmount($payment['total_deposit_amount'])}} {{$general->cur_text}}</h2>
                            <p class="text--small">@lang('Total Deposit')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--teal box--shadow2">
                            <i class="las la-money-check"></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers">{{getAmount($payment['total_deposit_charge'])}} {{$general->cur_text}}</h2>
                            <p class="text--small">@lang('Total Deposit Charge')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-30">
                    <div class="widget-three box--shadow2 b-radius--5 bg--white">
                        <div class="widget-three__icon b-radius--rounded bg--green  box--shadow2">
                            <i class="las la-money-bill-wave "></i>
                        </div>
                        <div class="widget-three__content">
                            <h2 class="numbers">{{$payment['total_deposit_pending']}}</h2>
                            <p class="text--small">@lang('Pending Deposit')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- row end -->


    <!-- <div class="row mt-50 mb-none-30">
        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-46 b-radius--10 box-shadow" >
                <div class="icon">
                    <i class="fa fa-wallet"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$paymentWithdraw['withdraw_method']}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Withdraw Method')</span>
                    </div>
                    <a href="{{route('admin.withdraw.method.index')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div> -->


        <!-- <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-28 b-radius--10 box-shadow" >
                <div class="icon">
                    <i class="fa fa-hand-holding-usd"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($paymentWithdraw['total_withdraw_amount'])}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Withdraw')</span>
                    </div>
                    <a href="{{route('admin.withdraw.approved')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div> -->

        <!-- <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-48 b-radius--10 box-shadow" >
                <div class="icon">
                    <i class="fa fa-money-bill-alt"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($paymentWithdraw['total_withdraw_charge'])}} </span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Withdraw Charge')</span>
                    </div>

                    <a href="{{route('admin.withdraw.approved')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div> -->

        <!-- <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--gradi-39 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-spinner"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$paymentWithdraw['total_withdraw_pending']}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Withdraw Pending')</span>
                    </div>

                    <a href="{{route('admin.withdraw.pending')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div> -->
    </div>


    <div class="row mb-none-30 mt-5">

        <div class="col-xl-12 mb-30">
            <div class="card ">
                <div class="card-header">
                    <h6 class="card-title mb-0">@lang('New User list')</h6>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th scope="col">@lang('User')</th>
                                <th scope="col">@lang('Username')</th>
                                <th scope="col">@lang('Email')</th>
                                <!-- <th scope="col">@lang('Action')</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($latestUser as $user)
                                <tr>
                                    <td data-label="@lang('User')">
                                        <div class="user">
                                            <div class="thumb"><img src="{{ getImage('assets/images/user/profile/'. $user->image)}}" alt="image"></div>
                                            <span class="name">{{$user->fullname}}</span>
                                        </div>
                                    </td>
                                    <td data-label="@lang('Username')"><a href="#">{{ $user->username }}</a></td>
                                    <td data-label="@lang('Email')">{{ $user->email }}</td>
                                    <!-- <td data-label="@lang('Action')">
                                        <a href="{{ route('admin.users.detail', $user->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                            <i class="las la-desktop text--shadow"></i>
                                        </a>
                                    </td> -->
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">@lang('no user yet!')</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
            </div><!-- card end -->
        </div>

        <!-- <div class="col-xl-6 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">@lang('Last 30 days Withdraw History')</h5>
                    <div id="withdraw-line"></div>
                </div>
            </div>
        </div> -->


    </div>

    <div class="row mb-none-30 mt-5 justify-content-center">
        <div class="col-xl-4 col-lg-4 mb-30">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <h5 class="card-title">@lang('Login By Browser')</h5>
                    <canvas id="userBrowserChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">@lang('Login By OS')</h5>
                    <canvas id="userOsChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 mb-30">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">@lang('Login By Country')</h5>
                    <canvas id="userCountryChart"></canvas>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

    <script src="{{asset('assets/admin/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/vendor/chart.js.2.8.0.js')}}"></script>


    <script>

        (function($){
            "use strict";

                // apex-bar-chart js
                var options = {
                    series: [{
                        name: 'Total Deposit',
                        data: @json($report['deposit_month_amount']->flatten())
                    }, {
                        name: 'Total Withdraw',
                        data: @json($report['withdraw_month_amount']->flatten())
                    }],
                    chart: {
                        type: 'bar',
                        height: 400,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '50%',
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
                        categories: @json($report['months']->flatten()),
                    },
                    yaxis: {
                        title: {
                            text: "{{$general->cur_sym}}",
                            style: {
                                color: '#7c97bb'
                            }
                        }
                    },
                    grid: {
                        xaxis: {
                            lines: {
                                show: false
                            }
                        },
                        yaxis: {
                            lines: {
                                show: false
                            }
                        },
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return "{{$general->cur_sym}}" + val + " "
                            }
                        }
                    }
                };

                var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
                chart.render();




            // apex-line chart
            var options = {
                chart: {
                    height: 430,
                    type: "area",
                    toolbar: {
                        show: false
                    },
                    dropShadow: {
                        enabled: true,
                        enabledSeries: [0],
                        top: -2,
                        left: 0,
                        blur: 10,
                        opacity: 0.08
                    },
                    animations: {
                        enabled: true,
                        easing: 'linear',
                        dynamicAnimation: {
                            speed: 1000
                        }
                    },
                },
                dataLabels: {
                    enabled: false
                },
                series: [
                    {
                        name: "Series 1",
                        data: @json($withdrawals['per_day_amount']->flatten())
                    }
                ],
                fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.9,
                        stops: [0, 90, 100]
                    }
                },
                xaxis: {
                    categories: @json($withdrawals['per_day']->flatten())
                },
                grid: {
                    padding: {
                        left: 5,
                        right: 5
                    },
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#withdraw-line"), options);

            chart.render();





            var ctx = document.getElementById('userBrowserChart');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: @json($chart['user_browser_counter']->keys()),
                    datasets: [{
                        data: {{ $chart['user_browser_counter']->flatten() }},
                        backgroundColor: [
                            '#FF4500',
                            '#e52d27',
                            '#fba540',
                            '#e7505a',
                            '#5050bf',
                            '#8E44AD',
                            '#4f8a8b',
                            '#1f4068',
                            '#62760c',
                            '#be5683',
                            '#cf1b1b',
                            '#96bb7c',
                            '#d3de32',
                            '#e8505b',
                            '#24a19c',
                            '#3b6978',
                            '#b83b5e',
                            '#ff4301',
                            '#c4fb6d',
                            '#bac964',
                            '#fb7813',
                            '#3b6978',
                            '#f3c623',
                            '#127681',
                            '#562349',
                            '#1f4068',
                            '#035aa6',
                            '#95389e',
                            '#481380'
                        ],
                        borderColor: [
                            'rgba(231, 80, 90, 0.75)'
                        ],
                        borderWidth: 0,

                    }]
                },
                options: {
                    aspectRatio: 1,
                    responsive: true,
                    maintainAspectRatio: true,
                    elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: false
                        }],
                        yAxes: [{
                            display: false
                        }]
                    },
                    legend: {
                        display: false,
                    }
                }
            });



            var ctx = document.getElementById('userOsChart');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: @json($chart['user_os_counter']->keys()),
                    datasets: [{
                        data: {{ $chart['user_os_counter']->flatten() }},
                        backgroundColor: [
                            '#FF4500',
                            '#e52d27',
                            '#fba540',
                            '#e7505a',
                            '#5050bf',
                            '#8E44AD',
                            '#4f8a8b',
                            '#1f4068',
                            '#62760c',
                            '#be5683',
                            '#cf1b1b',
                            '#96bb7c',
                            '#d3de32',
                            '#e8505b',
                            '#24a19c',
                            '#3b6978',
                            '#b83b5e',
                            '#ff4301',
                            '#c4fb6d',
                            '#bac964',
                            '#fb7813',
                            '#3b6978',
                            '#f3c623',
                            '#127681',
                            '#562349',
                            '#1f4068',
                            '#035aa6',
                            '#95389e',
                            '#481380'

                        ],
                        borderColor: [
                            'rgba(0, 0, 0, 0.05)'
                        ],
                        borderWidth: 0,

                    }]
                },
                options: {
                    aspectRatio: 1,
                    responsive: true,
                    elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: false
                        }],
                        yAxes: [{
                            display: false
                        }]
                    },
                    legend: {
                        display: false,
                    }
                },
            });


            // Donut chart
            var ctx = document.getElementById('userCountryChart');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: @json($chart['user_country_counter']->keys()),
                    datasets: [{
                        data: {{ $chart['user_country_counter']->flatten() }},
                        backgroundColor: [
                            '#FF4500',
                            '#e52d27',
                            '#fba540',
                            '#e7505a',
                            '#5050bf',
                            '#8E44AD',
                            '#4f8a8b',
                            '#1f4068',
                            '#62760c',
                            '#be5683',
                            '#cf1b1b',
                            '#96bb7c',
                            '#d3de32',
                            '#e8505b',
                            '#24a19c',
                            '#3b6978',
                            '#b83b5e',
                            '#ff4301',
                            '#c4fb6d',
                            '#bac964',
                            '#fb7813',
                            '#3b6978',
                            '#f3c623',
                            '#127681',
                            '#562349',
                            '#1f4068',
                            '#035aa6',
                            '#95389e',
                            '#481380',
                        ],
                        borderColor: [
                            'rgba(231, 80, 90, 0.75)'
                        ],
                        borderWidth: 3,

                    }]
                },
                options: {
                    aspectRatio: 1,
                    responsive: true,
                    elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: false
                        }],
                        yAxes: [{
                            display: false
                        }]
                    },
                    legend: {
                        display: false,
                    }
                }
            });
        })(jQuery);
    </script>
@endpush
