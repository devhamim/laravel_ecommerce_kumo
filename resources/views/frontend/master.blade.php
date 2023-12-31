<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>nugortech- Fashion eCommerce</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/dashbord_asset/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('frontend/css/plugins/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/iconfont.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/ion.rangeSlider.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('frontend/css/plugins/light-box.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('frontend/css/plugins/line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/snackbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/themify.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>

        <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Top Header -->
        <div class="py-2 br-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 hide-ipad">
                        <div class="top_second"><p class="medium text-muted m-0 p-0"><i class="lni lni-phone fs-sm"></i></i> Hotline <a href="#" class="medium text-dark text-underline">+8801303523442</a></p></div>
                    </div>

                    <!-- Right Menu -->
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <!-- Choose Language -->
                        {{-- <div class="language-selector-wrapper dropdown js-dropdown float-right mr-3">
                            <a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="Language" aria-label="Language dropdown">
                                <span class="hidden-xl-down medium text-muted">Language:</span>
                                <span class="iso_code medium text-muted">English</span>
                                <i class="fa fa-angle-down medium text-muted"></i>
                            </a>
                            <ul class="dropdown-menu popup-content link">
                                <li class="current"><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{ asset('frontend') }}/img/1.jpg" alt="en" width="16" height="11" /><span>English</span></a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{ asset('frontend') }}/img/2.jpg" alt="fr" width="16" height="11" /><span>Français</span></a></li>
                            </ul>
                        </div> --}}

                        @auth('customerlogin')
                        <div class="currency-selector dropdown js-dropdown float-right mr-3">
                            <div class="dropdown">
                                <a style="cursor: pointer;" class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::guard('customerlogin')->user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('customer.profile') }}">My Account</a>
                                    <a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a>
                                </div>
                            </div>
                        </div>

                        @else
                            <div class="currency-selector dropdown js-dropdown float-right mr-3">
                                <a href="{{ route('customer.reglogin') }}" class="text-muted medium"><i class="lni lni-user mr-1"></i>Sign In / Register</a>
                            </div>
                        @endauth
                    </div>

                </div>
            </div>
        </div>

        <div class="headd-sty header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
                            <div class="headd-sty-left d-flex align-items-center ">
                                <div class="headd-sty-01">
                                    <a class="nav-brand py-0" href="{{ route('index') }}">
                                        <img src="{{ asset('frontend/img/logo.png') }}" class="logo" alt="" />
                                    </a>
                                </div>
                                <div class="headd-sty-02 ml-3 bg-white rounded-md border-bold">
                                    {{-- <form class="bg-white rounded-md border-bold" action="{{ route('shop') }}" method="GET">
                                        @csrf --}}
                                        <div class="input-group">
                                            <input type="text" name="search_input" id="search_input" class="form-control custom-height b-0" placeholder="Search for products..." value="{{ @$_GET['q'] }}" />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <button id="search_btn" class="btn bg-white text-danger custom-height rounded px-3" type="submit"><i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                            <div class="headd-sty-last">
                                <ul class="nav-menu nav-menu-social align-to-right align-items-center d-flex">
                                    <li>
                                        <div class="call d-flex align-items-center text-left">
                                            <i class="lni lni-phone fs-xl"></i>
                                            <span class="text-muted small ml-3">Call Us Now:<strong class="d-block text-dark fs-md">01303523442</strong></span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" onclick="openWishlist()">
                                            <i class="far fa-heart fs-lg"></i><span class="dn-counter bg-success">{{ App\Models\wish::where('customer_id', Auth::guard('customerlogin')->id())->count() }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="openCart()">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <i class="fas fa-shopping-basket fs-lg"></i><span class="dn-counter theme-bg">{{ App\Models\card::where('customer_id', Auth::guard('customerlogin')->id())->count() }}</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile_nav">
                                <ul>
                                  
                                <li>
                                    <a href="#" onclick="openWishlist()">
                                        <i class="far fa-heart fs-lg"></i><span class="dn-counter bg-success">{{ App\Models\wish::where('customer_id', Auth::guard('customerlogin')->id())->count() }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="openCart()">
                                        <i class="lni lni-shopping-basket"></i><span class="dn-counter">{{ App\Models\card::where('customer_id', Auth::guard('customerlogin')->id())->count() }}</span>
                                    </a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navigation -->
        <div class="headerd header-dark head-style-2">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <div class="nav-toggle"></div>
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li><a href="{{ url('/') }}" class="pl-0">Home</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        @yield('content')

        <!-- ======================= Customer Features ======================== -->
        <section class="px-0 py-3 br-top">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">Free Shipping</h5>
                                <span class="text-muted">Capped at $10 per order</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">Secure Payments</h5>
                                <span class="text-muted">Up to 6 months installments</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">15-Days Returns</h5>
                                <span class="text-muted">Shop with fully confidence</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">24x7 Fully Support</h5>
                                <span class="text-muted">Get friendly support</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ======================= Customer Features ======================== -->

        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <img src="{{ asset('frontend') }}/img/logo-light.png" class="img-footer small mb-2" alt="" />

                                <div class="address mt-3">
                                    House # 85/2, Road # 4, Mohommadia Housing ltd, Mohommadpur Dhaka-1207
                                </div>
                                <div class="address mt-3">
                                    +8801303523442<br>nugortech@gmail.com
                                </div>
                                <div class="address mt-3">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Supports</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">About Page</a></li>
                                    <li><a href="#">Size Guide</a></li>
                                    <li><a href="#">FAQ's Page</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Shop</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Men's Shopping</a></li>
                                    <li><a href="#">Women's Shopping</a></li>
                                    <li><a href="#">Kids's Shopping</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Discounts</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('customer.logout') }}">Login</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Subscribe</h4>
                                <p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
                                <div class="foot-news-last">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <div class="input-group-append">
                                            <button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="address mt-3">
                                    <h5 class="fs-sm text-light">Secure Payments</h5>
                                    <div class="scr_payment"><img src="{{ asset('frontend') }}/img/card.png" class="img-fluid" alt="" /></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© 2023 Designd & Development By <a href="https://nugortech.com/">nugortech</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <!-- Wishlist -->
        <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
            <div class="rightMenu-scroll">
                <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                    <h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
                    <button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
                </div>
                <div class="right-ch-sideBar">

                    <div class="cart_select_items py-2">
                        <!-- Single Item -->
                        @foreach (App\Models\wish::where('customer_id', Auth::guard('customerlogin')->id())->get() as $wish)

                        <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="{{ asset('uplodes/prodact/preview') }}/{{ $wish->rel_to_prodact->preview }}" width="60" class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">{{ $wish->rel_to_prodact->prodact_name }}</h4>
                                    <p class="mb-2"></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">TK {{ number_format($wish->rel_to_prodact->after_discount) }}</h4>
                                </div>
                            </div>
                            <div class="fls_last"><a href="{{ route('wish.delete', $wish->id) }}" class="close_slide gray"><i class="ti-close"></i></a></div>
                        </div>
                        @endforeach
                    </div>

                    <div class="cart_action px-3 py-3">
                        <div class="form-group">
                            <a href="{{ route('wish') }}" class="btn d-block full-width btn-dark-light">View Whishlist</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Cart -->
        <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
            <div class="rightMenu-scroll">
                <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                    <h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
                    <button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
                </div>
                <div class="right-ch-sideBar">

                    <div class="cart_select_items py-2">
                        <!-- Single Item -->
                        @php
                            $subtotal = 0;
                        @endphp
                        @foreach (App\Models\card::where('customer_id', Auth::guard('customerlogin')->id())->get() as $cart)
                        <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="{{ asset('uplodes/prodact/preview') }}/{{ $cart->rel_to_prodact->preview }}" width="60" class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">{{ $cart->rel_to_prodact->prodact_name }}</h4>
                                    <p class="mb-2">Qut: <span class="text-dark ft-medium small">{{ $cart->quantity }}</span>,
                                        Color: <span class="text-dark small">{{ $cart->rel_to_color->color_name }}</span></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">TK {{ number_format($cart->rel_to_prodact->after_discount) }}</h4>
                                </div>
                            </div>
                            <div class="fls_last">
                                <a href="{{ route('cart.remove', $cart->id )}}" class="close_slide gray">
                                    <i class="ti-close"></i>
                                    </a>
                                </div>
                        </div>
                        @php
                            $subtotal += $cart->rel_to_prodact->after_discount*$cart->quantity;
                        @endphp
                        @endforeach
                    </div>

                    <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                        <h6 class="mb-0">Subtotal</h6>
                        <h3 class="mb-0 ft-medium">TK {{ number_format($subtotal) }}</h3>
                    </div>

                    <div class="cart_action px-3 py-3">
                        <div class="form-group">
                            <a href="{{ route('cart') }}" class="btn d-block full-width btn-dark-light">View Cart</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    
    
    {{-- <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100480895391374");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> --}}
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/slider-bg.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/lightbox.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/smoothproducts.js') }}"></script>
    <script src="{{ asset('frontend/js/snackbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jQuery.style.switcher.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script>
        function openWishlist() {
            document.getElementById("Wishlist").style.display = "block";
        }
        function closeWishlist() {
            document.getElementById("Wishlist").style.display = "none";
        }
    </script>

    <script>
        function openCart() {
            document.getElementById("Cart").style.display = "block";
        }
        function closeCart() {
            document.getElementById("Cart").style.display = "none";
        }
    </script>

    <script>
        function openSearch() {
            document.getElementById("Search").style.display = "block";
        }
        function closeSearch() {
            document.getElementById("Search").style.display = "none";
        }
    </script>

    {{-- search --}}
    <script>
         // Bind keypress event listener to the input field
            $('#search_input').keypress(function (e) {
                if (e.which === 13) {
                    // If Enter key is pressed, trigger the search button click event
                    $('#search_btn').click();
                }
            });

        $('#search_btn').click(function(){
            var search_input = $('#search_input').val();
            var catagory_id = $('input[class="catagory_id"]:checked').val();
            var color_id = $('input[class="color_idd"]:checked').val();
            var size_id = $('input[class="size_idd"]:checked').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var sort = $('#sort').val();


            var link = "{{ route('shop') }}"+"?q="+search_input+"&catagory_id="+catagory_id+"&color_id="+color_id+"&size_id="+size_id+"&min="+min+"&max="+max+"&sort="+sort;
            window.location.href = link;
        });

        $('#sort_price').click(function(){
            var search_input = $('#search_input').val();
            var catagory_id = $('input[class="catagory_id"]:checked').val();
            var color_id = $('input[class="color_idd"]:checked').val();
            var size_id = $('input[class="size_idd"]:checked').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var sort = $('#sort').val();


            var link = "{{ route('shop') }}"+"?q="+search_input+"&catagory_id="+catagory_id+"&color_id="+color_id+"&size_id="+size_id+"&min="+min+"&max="+max+"&sort="+sort;
            window.location.href = link;
        });

        $('.catagory_id').click(function(){
            var search_input = $('#search_input').val();
            var catagory_id = $('input[class="catagory_id"]:checked').val();
            var color_id = $('input[class="color_idd"]:checked').val();
            var size_id = $('input[class="size_idd"]:checked').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var sort = $('#sort').val();


            var link = "{{ route('shop') }}"+"?q="+search_input+"&catagory_id="+catagory_id+"&color_id="+color_id+"&size_id="+size_id+"&min="+min+"&max="+max+"&sort="+sort;
            window.location.href = link;
        });

        $('.color_idd').click(function(){
            var search_input = $('#search_input').val();
            var catagory_id = $('input[class="catagory_id"]:checked').val();
            var color_id = $('input[class="color_idd"]:checked').val();
            var size_id = $('input[class="size_idd"]:checked').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var sort = $('#sort').val();


            var link = "{{ route('shop') }}"+"?q="+search_input+"&catagory_id="+catagory_id+"&color_id="+color_id+"&size_id="+size_id+"&min="+min+"&max="+max+"&sort="+sort;
            window.location.href = link;
        });

        $('.size_idd').click(function(){
            var search_input = $('#search_input').val();
            var catagory_id = $('input[class="catagory_id"]:checked').val();
            var color_id = $('input[class="color_idd"]:checked').val();
            var size_id = $('input[class="size_idd"]:checked').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var sort = $('#sort').val();


            var link = "{{ route('shop') }}"+"?q="+search_input+"&catagory_id="+catagory_id+"&color_id="+color_id+"&size_id="+size_id+"&min="+min+"&max="+max+"&sort="+sort;
            window.location.href = link;
        });
        $('#sort').change(function(){
            var search_input = $('#search_input').val();
            var catagory_id = $('input[class="catagory_id"]:checked').val();
            var color_id = $('input[class="color_idd"]:checked').val();
            var size_id = $('input[class="size_idd"]:checked').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var sort = $('#sort').val();


            var link = "{{ route('shop') }}"+"?q="+search_input+"&catagory_id="+catagory_id+"&color_id="+color_id+"&size_id="+size_id+"&min="+min+"&max="+max+"&sort="+sort;
            window.location.href = link;
        });
    </script>

{{-- recapcher --}}
{!! NoCaptcha::renderJs() !!}

    @yield('footer_script')

</body>

</html>
