<x-main-layout>
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

    <!--====== Start Header ======-->
    <header class="header-area header-three">
        <!--====== Header Top Bar ======-->
        <div class="header-top-bar pt-30 pb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block">
                        <!--====== Site Branding ======-->
                        <div class="site-brading">
                            <a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('main/images/logo/logo-black.png') }}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-12">
                        <!--====== Information Wrapper ======-->
                        <div class="information-wrapper">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-info-item-two">
                                        <div class="inner-info">
                                            <div class="icon">
                                                <i class="far fa-map-marker-alt"></i>
                                            </div>
                                            <div class="info">
                                                <span class="title">Office Address</span>
                                                <h5>583 Main Street, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-info-item-two">
                                        <div class="inner-info">
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="info">
                                                <span class="title">Email Address</span>
                                                <h5><a href="mailto:support@gmail.com">support@gmail.com</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-info-item-two">
                                        <div class="inner-info">
                                            <div class="icon">
                                                <i class="far fa-phone-plus"></i>
                                            </div>
                                            <div class="info">
                                                <span class="title">Drop a Line</span>
                                                <h5><a href="tel:+000(123)45688">+000 (123) 456 88</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== Header Navigation ======-->
        <div class="header-navigation">
            <div class="nav-overlay"></div>
            <div class="container-fluid">
                <div class="primary-menu gray-bg">
                    <!--====== Site Branding ======-->
                    <div class="site-brading d-block d-xl-none">
                        <a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('main/images/logo/logo-black.png') }}" alt="Logo"></a>
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
                        <!--====== Main Menu ======-->
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
                        <div class="lang-dropdown">
                            <select class="wide">
                                <option value="English">English</option>
                                <option value="French">French</option>
                            </select>
                        </div>
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
    </header>
    <!--====== End Header ======-->

    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{ asset('main/images/bg/page-bg.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">Service</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Breadcrumb Section ======-->

    <!--====== Start Booking Section ======-->
    <section class="booking-form-section pb-100">
        <div class="container-fluid">
            <div class="booking-form-wrapper p-r z-2">
                <form action="" class="booking-form-two">
                    <div class="form_group">
                        <span>Check In</span>
                        <label><i class="far fa-calendar-alt"></i></label>
                        <input type="text" class="form_control datepicker" placeholder="Check In">
                    </div>
                    <div class="form_group">
                        <span>Check Out</span>
                        <label><i class="far fa-calendar-alt"></i></label>
                        <input type="text" class="form_control datepicker" placeholder="Check Out">
                    </div>
                    <div class="form_group">
                        <span>Guest</span>
                        <label><i class="far fa-user-alt"></i></label>
                        <input type="text" class="form_control" placeholder="Guest" name="text">
                    </div>
                    <div class="form_group">
                        <span>Accommodations</span>
                        <select class="wide">
                            <option data-display="Accommodations">Accommodations</option>
                            <option value="01">Classic Tent</option>
                            <option value="01">Forest Camping</option>
                            <option value="01">Small Trailer</option>
                            <option value="01">Tree House Tent</option>
                            <option value="01">Tent Camping</option>
                            <option value="01">Couple Tent</option>
                        </select>
                    </div>
                    <div class="form_group">
                        <button class="booking-btn">Check Availability <i class="far fa-angle-double-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====== End Booking Section ======-->

    <!--====== Start Places Section ======-->
    <section class="places-section pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-1.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Sitting on Boat Spreading Her Arms</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>North Province, Maldives</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-2.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">White Canopy Tent Near
                                        Coastline</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>North Province, Maldives</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-3.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Sitting on Boat Spreading Her Arms</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>Tambon Khlong Sok, Thailand</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-4.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Sitting on Boat Spreading Her Arms</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>Arefu, AG, Romania</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-5.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Cottages In The Middle Of Beach</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>Vaitāpē, French Polynesia</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-6.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Beautiful Floating Villa on River</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>Gaafu Dhaalu Atoll, Maldives</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-7.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Man and Woman Walks on Dock</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>Maldives</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-8.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Trees Under White Clouds during Daytime</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>Vaitāpē, French Polynesia</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                    <!--=== Single Place Item ===-->
                    <div class="single-place-item mb-60 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{ asset('') }}main/images/place/place-9.jpg" alt="Place Image">
                        </div>
                        <div class="place-content">
                            <div class="info">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(4.9)</a></li>
                                </ul>
                                <h4 class="title"><a href="">Body of Water Near Mountain</a></h4>
                                <p class="location"><i class="far fa-map-marker-alt"></i>Bali, Indonesia</p>
                                <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                <div class="meta">
                                    <span><i class="far fa-clock"></i>05 Days</span>
                                    <span><i class="far fa-user"></i>25</span>
                                    <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Gowilds Pagination ===-->
                    <ul class="gowilds-pagination wow fadeInUp text-center">
                        <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Places Section ======-->

    <!--====== Start Gallery Section ======-->
    <section class="gallery-section mbm-150">
        <div class="container-fluid">
            <div class="slider-active-5-item wow fadeInUp">
                <!--=== Single Gallery Item ===-->
                <div class="single-gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('main/images/gallery/gl-1.jpg') }}" alt="Gallery Image">
                        <div class="hover-overlay">
                            <a href="{{ asset('main/images/gallery/gl-1.jpg') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!--=== Single Gallery Item ===-->
                <div class="single-gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('main/images/gallery/gl-2.jpg') }}" alt="Gallery Image">
                        <div class="hover-overlay">
                            <a href="{{ asset('main/images/gallery/gl-2.jpg') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!--=== Single Gallery Item ===-->
                <div class="single-gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('main/images/gallery/gl-3.jpg') }}" alt="Gallery Image">
                        <div class="hover-overlay">
                            <a href="{{ asset('main/images/gallery/gl-3.jpg') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!--=== Single Gallery Item ===-->
                <div class="single-gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('main/images/gallery/gl-4.jpg') }}" alt="Gallery Image">
                        <div class="hover-overlay">
                            <a href="{{ asset('main/images/gallery/gl-4.jpg') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!--=== Single Gallery Item ===-->
                <div class="single-gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('main/images/gallery/gl-5.jpg') }}" alt="Gallery Image">
                        <div class="hover-overlay">
                            <a href="{{ asset('main/images/gallery/gl-5.jpg') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <!--=== Single Gallery Item ===-->
                <div class="single-gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset('main/images/gallery/gl-3.jpg') }}" alt="Gallery Image">
                        <div class="hover-overlay">
                            <a href="{{ asset('main/images/gallery/gl-3.jpg') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Gallery Section ======-->
</x-main-layout>