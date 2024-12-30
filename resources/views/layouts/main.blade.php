<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('main/images/favicon.ico') }}" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('main/fonts/flaticon/flaticon_gowilds.css') }}">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ asset('main/fonts/fontawesome/css/all.min.css') }}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('main/vendor/magnific-popup/dist/magnific-popup.css') }}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('main/vendor/slick/slick.css') }}">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="{{ asset('main/vendor/jquery-ui/jquery-ui.min.css') }}">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ asset('main/vendor/nice-select/css/nice-select.css') }}">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('main/vendor/animate.css') }}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('main/css/default.css') }}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">

    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->

        <!--====== Search From ======-->
        <div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                            <input type="search" class="form_control" placeholder="Search here" name="search">
                            <label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--====== Search From ======-->

        <!--====== Header Area ======-->
        <header class="header-area header-one transparent-header">
            <!--====== Header Navigation ======-->
            <div class="header-navigation navigation-white">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <div class="primary-menu">
                        <!--====== Site Branding ======-->
                        <div class="site-branding">
                            <a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('main/images/logo/logo-white.png') }}" alt="Site Logo"></a>
                        </div>
                        <!--====== Nav Menu ======-->
                        <div class="nav-menu">
                            <!--====== Site Branding ======-->
                            <div class="mobile-logo mb-30 d-block d-xl-none">
                                <a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('main/images/logo/logo-black.png') }}" alt="Site Logo"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--====== main Menu ======-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Tours</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Tours</a></li>
                                            <li><a href="">Tours Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Destination</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Destination</a></li>
                                            <li><a href="">Destination Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Blog List</a></li>
                                            <li><a href="">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Our Gallery</a></li>
                                            <li><a href="">Our Events</a></li>
                                            <li><a href="">Our Shop</a></li>
                                            <li><a href="">Product Details</a></li>
                                            <li><a href="">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item search-item">
                                        <div class="search-btn" data-bs-toggle="modal" data-bs-target="#search-modal"><i class="far fa-search"></i></div>
                                    </li>
                                </ul>
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="" class="main-btn secondary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--====== Nav Right Item ======-->
                        <div class="nav-right-item">
                            <div class="menu-button d-xl-block d-none">
                                <a href="" class="main-btn primary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--====== End Area ======-->

        <main>
            {{ $slot }}
        </main>

        <!--====== Start Footer ======-->
        <footer class="main-footer black-bg pt-230">
            <div class="container">
                <!--=== Footer Top ===-->
                <div class="footer-top pt-40 wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Location</span>
                                    <p>55 Main Street, Australia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Email</span>
                                    <p><a href="mailto:support@gmail.com">support@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Hotline</span>
                                    <p><a href="tel:+000(123)456898">+000 (123) 456 898</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Social Box ===-->
                            <div class="social-box mb-40 float-lg-end">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Widget ===-->
                <div class="footer-widget-area pt-75 pb-30">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget about-company-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">About</h4>
                                <div class="footer-content">
                                    <p>To take trivial example which us
                                        ever undertakes laborious physica
                                        exercise except obsome</p>
                                    <a href="#" class="footer-logo"><img src="{{ asset('main/images/logo/logo-white.png') }}" alt="Site Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget service-nav-widget mb-40 pl-lg-70 wow fadeInDown">
                                <h4 class="widget-title">Services</h4>
                                <div class="footer-content">
                                    <ul class="footer-widget-nav">
                                        <li><a href="#">Caravan Soler Tent</a></li>
                                        <li><a href="#">Family Tent Camping</a></li>
                                        <li><a href="#">Classic Tent Camping</a></li>
                                        <li><a href="#">Wild Tent Camping</a></li>
                                        <li><a href="#">Small Cabin Wood</a></li>
                                    </ul>
                                    <ul class="footer-widget-nav">
                                        <li><a href="#">Need a Career ?</a></li>
                                        <li><a href="#">Latest News & Blog</a></li>
                                        <li><a href="#">Core Features</a></li>
                                        <li><a href="#">Meet Our teams</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget footer-newsletter-widget mb-40 pl-lg-100 wow fadeInUp">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="footer-content">
                                    <p>Which of us ever undertake laborious
                                        physical exercise except obtain</p>
                                    <form>
                                        <div class="form_group">
                                            <label><i class="far fa-paper-plane"></i></label>
                                            <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Copyright ===-->
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Footer Text ===-->
                            <div class="footer-text">
                                <p>Copy@ 2023 <span style="color: #F7921E;">GoWilds</span>, All Right Reserved</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--=== Footer Nav ===-->
                            <div class="footer-nav float-lg-end">
                                <ul>
                                    <li><a href="#">Setting & privacy</a></li>
                                    <li><a href="#">Faqs</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->

        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>

        <!--====== Jquery js ======-->
        <script src="{{ asset('main/vendor/jquery-3.6.0.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('main/vendor/popper/popper.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('main/vendor/slick/slick.min.js') }}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('main/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Counterup js ======-->
        <script src="{{ asset('main/vendor/jquery.counterup.min.js') }}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{ asset('main/vendor/jquery.waypoints.js') }}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{ asset('main/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <!--====== jquery UI js ======-->
        <script src="{{ asset('main/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <!--====== WOW js ======-->
        <script src="{{ asset('main/vendor/wow.min.js') }}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('main/js/theme.js') }}"></script>
    </body>
</html>
