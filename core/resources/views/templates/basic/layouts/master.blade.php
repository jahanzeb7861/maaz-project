<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <meta name="_token" content="{{ csrf_token() }}">
     <meta name="content" id="content" content="P&M ElectronicsStore">
    <title>P&M Electronics Store | Sell Everything</title>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/price_range_style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/price_range_ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pricing-two.css') }}">


     <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.jpg') }}"/>


    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-tagsinput.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/frontend/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">


    <style>
        .tox .tox-promotion,
        .tox-statusbar__branding {
            display: none !important;
        }

    </style>
</head>

<body class="home_2">


    <!--=============================
        MENU START
    ==============================-->
    <nav class="navbar navbar-expand-lg main_menu main_menu_3">
        <div class="container">
            <a class="navbar-brand" href="http://pmelectronics.net/">
                <img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="P&M ElectronicsStore"
                    class="img-fluid w-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon" aria-hidden="true"></i>
                <i class="far fa-times close_icon" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://pmelectronics.net/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://sftechbuyer.com/">Sell
                            <i class="far fa-chevron-down" aria-hidden="true"></i>

                        </a>
                        <ul class="wsus__droap_menu">
                            <li><a href="https://sftechbuyer.com/smart-phone">Smartphone</a></li>
                            <li><a href="https://sftechbuyer.com/tablet">Tablet</a></li>
                            <li><a href="https://sftechbuyer.com/smartwatch">SmartWatch</a>
                            </li>
                            <li><a href="https://sftechbuyer.com/headphones-airpods">Headphones</a>
                            </li>
                            <li><a href="https://sftechbuyer.com/game-console">Game
                                    Console</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://sftechbuyer.com#why-us">Why us?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://sftechbuyer.com#how-it-works">How it works?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://sftechbuyer.com/faqs">F.A.Q.</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#trackOrderForm">Track Order</a>
                    </li> -->



                </ul>




                <ul class="right_menu d-flex flex-wrap">
                    <!-- <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user" style="font-size: 18px;"></i>
                                <i class="far fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <ul class="wsus__droap_menu">
                                @guest
                                <li><a href="{{ route('user.login') }}">Login</a></li>
                                <li><a href="{{ route('user.register') }}">Register</a></li>
                                @else
                                <li><a href="{{ route('user.home') }}">Dashboard</a></li>
                                <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                @endguest
                            </ul>
                        </li>
                    </ul> -->
                    <!-- <li>
                        <a href="#">
                            <img src="{{ asset('assets/frontend/images/menu_cart_icom.png') }}" alt="user"
                                class="img-fluid w-100">
                            <span id="cartQty">0</span>
                        </a>
                    </li> -->
                    <li><a class="start_btn" href="https://sftechbuyer.com/">Sell
                            Device</a></li>
                    <li><a class="support_btn" href="http://pmelectronics.net/">Buy Device</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=============================
        MENU END
    ==============================-->


    @yield('content')

    <!--=============================
        SUBSCRIBE START
    ==============================-->

    <footer class="pt_120 xs_pt_80" style=" background: url({{ asset('assets/frontend/images/3rd-banner-backgrund.jpg') }}) no-repeat center center / cover;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-md-4 col-lg-4">
                    <div class="wsus__footer_content">
                        <a class="footer_logo" href="#">
                            <img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}"
                                alt="P&M ElectronicsStore" class="img-fluid w-100">
                        </a>
                        <p class="description text-dark">We specialize in buying and selling various types of phones. Our
                            commitment is to provide the best experience for our customers. We cater to both corporate
                            clients and individual sellers.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-lg-2">
                    <div class="wsus__footer_content">
                        <h4  class="text-dark">Support</h4>
                        <ul>
                            <li><a href="tel:(415) 568-8444" class="text-dark">(415) 568-8444</a></li>
                            <li><a href="tel:(925) 877-0777" class="text-dark">(925) 877-0777</a></li>
                            <li><a href="tel:(206) 792-6923" class="text-dark">(206) 792-6923</a></li>
                            <li class="mt-2"><span class="text-dark">4141 Manzanita Ave #125 Carmichael, CA 95608</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-lg-2">
                    <div class="wsus__footer_content">
                        <h4  class="text-dark">Quick Link</h4>
                        <ul>
                            <li><a class="text-dark" href="https://pmelectronics.net/about-us/" target="_blank">About Us</a></li>
                            <li><a class="text-dark" href="https://sftechbuyer.com/faqs">FAQ</a></li>
                            <li><a class="text-dark" href="https://pmelectronics.net/contact-us/" target="_blank">Contact
                                    us</a></li>
                            <li><a class="text-dark" href="https://pmelectronics.net/services/" target="_blank">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-lg-3">
                    <div class="wsus__footer_content">
                        <h4 class="text-dark">Important Link</h4>
                        <ul>
                            <li>
                                <a class="text-dark" href="https://sftechbuyer.com/smart-phone">Smartphone</a>
                            </li>
                            <li>
                                <a class="text-dark"  href="https://sftechbuyer.com/tablet">Tablet</a>
                            </li>
                            <li>
                                <a class="text-dark" href="https://sftechbuyer.com/">Smartwatch</a>
                            </li>
                            <li>
                                <a class="text-dark" href="https://sftechbuyer.com/">Game Consoles</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="wsus__footer_bottom my-4">
            <div class="container max-width">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="wsus__footer_copyright d-flex flex-wrap">
                            <p class="text-white">©2025 P&M Electronics All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--============================
        SCROLL BUTTON START
    =============================-->
    <div class="wsus__scroll_btn">
        <p>{{__('user.Up to Top')}}</p>
        <span><i class="far fa-angle-up"></i></span>
    </div>
    <!--============================
        SCROLL BUTTON END
    =============================-->

    <!--jquery library js-->
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('assets/frontend/js/Font-Awesome.js') }}"></script>
    <!--simplyCountdown js-->
    <script src="{{ asset('assets/frontend/js/simplyCountdown.js') }}"></script>
    <!--countup js-->
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.countup.min.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <!--price range js-->
    <script src="{{ asset('assets/frontend/js/price_range_script.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/price_range_ui.min.js') }}"></script>
    <!--isotope js-->
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <!--summernote js-->
    <script src="{{ asset('assets/frontend/js/summernote.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/bootstrap-tagsinput.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        @if(Session::has('messege'))
        var type = "{{Session::get('alert-type','info')}}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
        @endif

    </script>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}');

    </script>
    @endforeach
    @endif

    @stack('frontend_js')



    <script>
        "use strict";
        //wishlist start
        function addWishlist(product_id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ url('/add/wishlist/') }}/" + product_id,
                dataType: 'json',
                success: function (responsecheckout) {
                    if (response.success) {
                        toastr.success(response.success);
                    } else {
                        toastr.error(response.error);
                    }
                }
            })
        };
        //wishlist end
        //cart start
        function addToCard(product_id) {
            let product_type = $('#product_type').val();
            let regular_price = $('#script_regular_price').val();
            let extend_price = $('#script_extend_price').val();
            let price = $('#image_price').val();
            let variant_id = $('#variant_id option:selected').val();
            let variant_name = $('#variant_id option:selected').text();
            let price_type = $('#price_type option:selected').val();
            let product_name = $('#product_name').val();
            let slug = $('#slug').val();
            let category_name = $('#category_name').val();
            let category_id = $('#category_id').val();
            let product_image = $('#product_image').val();
            let author_name = $('#author_name').val();
            let author_id = $('#author_id').val();
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                },
                type: "POST",
                dataType: "json",
                data: {
                    product_type: product_type,
                    regular_price: regular_price,
                    extend_price: extend_price,
                    price: price,
                    variant_id: variant_id,
                    variant_name: variant_name,
                    price_type: price_type,
                    product_name: product_name,
                    slug: slug,
                    category_name: category_name,
                    category_id: category_id,
                    product_image: product_image,
                    author_name: author_name,
                    author_id: author_id,
                },
                url: "{{ url('/add-to-cart') }}" + "/" + product_id,
                success: function (response) {
                    miniCart();
                    if (response.status == 1) {
                        toastr.success(response.message);
                    }
                    if (response.status == 0) {
                        toastr.error(response.message);
                    }
                }
            });
        };
        //add to cart function end
        //mini cart function start
        function miniCart() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('/mini-cart') }}",
                success: function (response) {
                    $('#cartQty').text(response.cartQty);
                }
            });
        }
        miniCart();
        //mini cart function end

        //cart item  function start
        function cartItem() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('/cart-item') }}",
                success: function (response) {
                    let cartItem = "";
                    $('#cartTotal').text(response.cartTotal);
                    $.each(response.carts, function (key, value) {
                        cartItem += `<tr>
                                    <td class="img">
                                        <a href="{{ url('/product/${value.options.slug}') }}">
                                            <img src="${ value.options.image }" alt="cart item"
                                                class="img-fluid w-100">
                                        </a>
                                    </td>
                                    <td class="description">
                                        <h3><a href="{{ url('/product/${value.options.slug}') }}">${value.name}</a></h3>
                                        <p>
                                            <span>{{__('user.Item by')}}</span> ${value.options.author}
                                            <b class="${value.options.variant_name!=null?'':'d-none'}">${value.options.variant_name!=null?value.options.variant_name:''}</b>
                                            <b class="${value.options.price_type!=null?'':'d-none'}">${value.options.price_type!=null?value.options.price_type:''}</b>
                                        </p>

                                    </td>
                                    <td class="price">
                                        <p>${response.setting.currency_icon+value.price}</p>
                                    </td>
                                    <td class="discount">
                                        <p>${value.options.category}</p>
                                    </td>
                                    <td class="action">
                                        <a href="javascript:;" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="far fa-times"></i></a>
                                    </td>
                            </tr>`;
                    });
                    $('#cartItem').html(cartItem);
                }
            });
        }
        cartItem();

        function cartRemove(rowId) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('/cart-remove') }}" + "/" + rowId,
                success: function (response) {
                    miniCart();
                    cartItem();
                    couponCalculation();
                    if (response.status == 1) {
                        toastr.success(response.message);
                    }
                }
            });
        };
        //cart item function end
        //coupon start
        function couponApply() {
            let coupon_name = $('#coupon_name').val();
            if (coupon_name) {
                $.ajax({
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    type: "POST",
                    dataType: "json",
                    data: {
                        coupon_name: coupon_name,
                    },
                    url: "{{ url('/coupon-apply') }}",
                    success: function (response) {
                        if (response.status == 1) {
                            $('#coupon_name').val('');
                            couponCalculation();
                            toastr.success(response.message);
                        }
                        if (response.status == 0) {
                            $('#coupon_name').val('');
                            toastr.error(response.message);
                        }
                    }
                });
            } else {
                let coupon_valid = $('#coupon_valid').val();
                toastr.error(coupon_valid);
            }
        };

        function couponCalculation() {
            $.ajax({
                type: "GET",
                url: "{{ url('/coupon-calculation') }}",
                dataType: 'json',
                success: function (data) {
                    if (data.total) {
                        $('#calprice').html(`
                        <p class="subtotal">{{__('user.Subtotal')}} <span>${data.setting.currency_icon}<span id="cartTotal">${data.total}</span></span></p>
                        <p class="discount">{{__('user.Discount')}} <span>(-)${data.setting.currency_icon} 0</span></p>
                        <p class="total">{{__('user.Total')}} <span><span>${data.setting.currency_icon}<span>${data.total}</span></span></p>
                        <a class="common_btn" href="#">{{__('user.Proceed to Checkout')}}</a>
                    `);
                    } else {
                        $('#calprice').html(`
                        <p class="subtotal">{{__('user.Subtotal')}} <span>${data.setting.currency_icon}<span id="cartTotal">${data.sub_total}</span></span></p>
                        <p class="subtotal">{{__('user.Coupon')}} <span>${data.coupon_name} <button type="submit" class="btn btn-danger btn-sm" onclick="couponRemove()"><i class="fa fa-times"></i></button></span></p>
                        <p class="discount">{{__('user.Discount')}} <span>(-)${data.setting.currency_icon} ${data.discount_amount}</span></p>
                        <p class="total">{{__('user.Total')}} <span><span>${data.setting.currency_icon}</span>${data.total_amount}</span></p>
                        <a class="common_btn" href="#">{{__('user.Proceed to Checkout')}}</a>
                    `);
                    }
                }
            });
        };
        couponCalculation();

        function couponRemove() {
            $.ajax({
                type: "GET",
                url: "{{ url('/coupon-remove') }}",
                dataType: 'json',
                success: function (response) {
                    $('#coupon_name').val('');
                    couponCalculation();
                    if (response.status == 1) {
                        toastr.success(response.message);
                    }
                }
            })
        }
        //coupon end

    </script>

</body>

</html>
