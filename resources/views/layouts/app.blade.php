<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li class="hot"><a href="#">Latest</a>
                                        <ul class="submenu">
                                            <li><a href="shop.html"> Product list</a></li>
                                            <li><a href="product_details.html"> Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                            <li><a href="confirmation.html">Confirmation</a></li>
                                            <li><a href="checkout.html">Product Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="{{ route('login') }}"><span class="flaticon-user"></span></a></li>
                                <li><a href="{{ route('cart') }}"><span class="flaticon-shopping-cart"></span></a> </li>
                                @auth
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn-primary">Log out</button>
                                        </form>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
        @yield('content')

        <!-- JS here -->

        <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>

        <!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/animated.headline.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('js/contact.js') }}"></script>
        <script src="{{ asset('js/jquery.form.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        
        <!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>