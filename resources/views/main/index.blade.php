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
                                <li class="menu-item">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="menu-item has-children"><a href="#">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('service') }}">Service</a></li>
                                        <li><a href="{{ route('service-detail') }}">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blog') }}">Blog List</a></li>
                                        <li><a href="{{ route('blog-detail') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                                        <li><a href="{{ route('event') }}">Our Events</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item search-item">
                                    <div class="search-btn" data-bs-toggle="modal" data-bs-target="#search-modal"><i class="far fa-search"></i></div>
                                </li>
                            </ul>
                        </nav>
                        <!--====== Menu Button ======-->
                        <div class="menu-button mt-40 d-xl-none">
                            <a href="{{ route('contact') }}" class="main-btn secondary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
                        </div>
                    </div>
                    <!--====== Nav Right Item ======-->
                    <div class="nav-right-item">
                        <div class="menu-button d-xl-block d-none">
                            <a href="{{ route('contact') }}" class="main-btn primary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
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
    <!--====== End Header Area ======-->

    <!--====== Start Hero Section ======-->
    <section class="hero-section">
        <!--=== Hero Wrapper ===-->
        <div class="hero-wrapper black-bg">
            <!--=== Hero Slider ===-->
            <div class="hero-slider-one">
                @forelse($heroSections as $heroSection)
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <h1 data-animation="fadeInDown" data-delay=".4s">
                                            {{ $heroSection->title }}
                                        </h1>
                                        <div class="text-button d-flex align-items-center">
                                            <p data-animation="fadeInLeft" data-delay=".5s">
                                                {{ $heroSection->subtitle }}
                                            </p>
                                            <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                                <a href="{{ route('about') }}" class="main-btn primary-btn">Explore More<i class="fas fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image" data-animation="fadeInRight">
                                        <img src="{{ asset('storage/' . $heroSection->image) }}" alt="{{ $heroSection->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <h1 data-animation="fadeInDown" data-delay=".4s">
                                            No Data Found
                                        </h1>
                                        <div class="text-button d-flex align-items-center">
                                            <p data-animation="fadeInLeft" data-delay=".5s">
                                                No Data Found
                                            </p>
                                            <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                                <a href="#" class="main-btn primary-btn">No Data Found<i class="fas fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image" data-animation="fadeInRight">
                                        <img src="{{ asset('main/images/hero/hero-one_img-1.jpg') }}" alt="Hero Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!--====== End Hero Section ======-->

    <!--====== Start About Section ======-->
    <section class="about-section pt-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <!--=== About Content Box ===-->
                    <div class="about-content-box text-center mb-55 wow fadeInDown">
                        <div class="section-title mb-30">
                            <span class="sub-title">About Company</span>
                            <h2>We Are Most Funning Company
                                About Travel & Tours</h2>
                        </div>
                        <p>Sit amet consectetur. Velit integer eu tincidunt scelerisque. Sodales volutpat neque fermentum
                            malesuada scelerisque massa lacus. Ultrices eget leo cras odio blandit rhoncus eu. At feugiat
                            condimentum massa integer iaculis sit sit. Sagittis vitae quis sed vitae congue</p>
                    </div>
                </div>
            </div>
            <div class="slider-active-4-item wow fadeInUp">
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('main/images/features/feat-1.jpg') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Tent Camping
                                    Services</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Set unde omnis estenatus voluptatem aperiae.</p>
                        </div>
                    </div>
                </div>
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('main/images/features/feat-2.jpg') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Trailers and RV Spots</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Set unde omnis estenatus voluptatem aperiae.</p>
                        </div>
                    </div>
                </div>
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('main/images/features/feat-3.jpg') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Adventure and Climbing</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Set unde omnis estenatus voluptatem aperiae.</p>
                        </div>
                    </div>
                </div>
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('main/images/features/feat-4.jpg') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Couple Camping
                                    or Cabin</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Set unde omnis estenatus voluptatem aperiae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About Section ======-->

    <!--====== Start Booking Section ======-->
    <section class="booking-section pt-60 pb-50">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-lg-6">
                    <!--=== Booking Content Box ===-->
                    <div class="booking-content-box mb-50 wow fadeInLeft">
                        <div class="section-title mb-50">
                            <span class="sub-title">Availability</span>
                            <h2>Booking Your Best Tour
                                Camping Availability</h2>
                        </div>
                        <form class="booking-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <label><i class="far fa-calendar-alt"></i></label>
                                        <input type="text" class="form_control datepicker" placeholder="Check In">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <label><i class="far fa-calendar-alt"></i></label>
                                        <input type="text" class="form_control datepicker" placeholder="Check Out">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <label><i class="far fa-user-alt"></i></label>
                                        <input type="text" class="form_control" placeholder="Guest" name="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group">
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
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comments" placeholder="Comments" class="form_control" cols="8" rows="3"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_group">
                                        <button class="main-btn primary-btn">Check availability<i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--=== Booking Image Box ===-->
                    <div class="booking-image-box mb-50 ml-lg-45 wow fadeInRight">
                        <img src="{{ asset('main/images/contact/contact-1.jpg') }}" class="radius-60" alt="Contact Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Booking Section ======-->

    <!--====== Start Activity Section ======-->
    <section class="activity-section">
        <div class="activity-wrapper-bgc  text-white black-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title">Popular Activity</span>
                            <h2>Feel Real Adventure and Very
                                Colse to Nature</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <!--=== Activity Nav Tab ===-->
                        <div class="activity-nav-tab mb-50 wow fadeInLeft">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#tab1" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1">Tent Camping</a>
                                </li>
                                <li>
                                    <a href="#tab2" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2">Mountain Biking</a>
                                </li>
                                <li>
                                    <a href="#tab3" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3">Birdwatching</a>
                                </li>
                                <li>
                                    <a href="#tab4" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4">Fishing</a>
                                </li>
                                <li>
                                    <a href="#tab5" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab5">Mountain Hiking</a>
                                </li>
                                <li>
                                    <a href="#tab6" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab6">Mountain Hiking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!--=== Tab Content ===-->
                        <div class="tab-content mb-50 wow fadeInRight">
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Real Adventure & Enjoy
                                                Your Dream Tours</h3>
                                            <p>Sit amet consectetur velit integer tincidunt
                                                scelerisque. Sodales volutpat neque fermeny
                                                malesuada scelerisque massa lacus</p>
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!--=== Activity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('main/images/gallery/activity.jpg') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab2">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Real Adventure & Enjoy
                                                Your Dream Tours</h3>
                                            <p>Sit amet consectetur velit integer tincidunt
                                                scelerisque. Sodales volutpat neque fermeny
                                                malesuada scelerisque massa lacus</p>
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Acctivity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('main/images/gallery/activity.jpg') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Real Adventure & Enjoy
                                                Your Dream Tours</h3>
                                            <p>Sit amet consectetur velit integer tincidunt
                                                scelerisque. Sodales volutpat neque fermeny
                                                malesuada scelerisque massa lacus</p>
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Activity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('main/images/gallery/activity.jpg') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Real Adventure & Enjoy
                                                Your Dream Tours</h3>
                                            <p>Sit amet consectetur velit integer tincidunt
                                                scelerisque. Sodales volutpat neque fermeny
                                                malesuada scelerisque massa lacus</p>
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Activity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('main/images/gallery/activity.jpg') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab5">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Real Adventure & Enjoy
                                                Your Dream Tours</h3>
                                            <p>Sit amet consectetur velit integer tincidunt
                                                scelerisque. Sodales volutpat neque fermeny
                                                malesuada scelerisque massa lacus</p>
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Activity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('main/images/gallery/activity.jpg') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab6">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Cotent Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Real Adventure & Enjoy
                                                Your Dream Tours</h3>
                                            <p>Sit amet consectetur velit integer tincidunt
                                                scelerisque. Sodales volutpat neque fermeny
                                                malesuada scelerisque massa lacus</p>
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>
                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Activity Image ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('main/images/gallery/activity.jpg') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Activity Section ======-->

    <!--====== Start Services Section ======-->
    <section class="services-seciton pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <!--=== Section Title ===-->
                    <div class="section-title text-center mb-60 wow fadeInDown">
                        <span class="sub-title">Popular Services</span>
                        <h2>Amazing Adventure Camping
                            Services for Enjoyed</h2>
                    </div>
                </div>
            </div>
            <div class="slider-active-3-item wow fadeInUp">
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="">Classic Tents</a></h3>
                        <p>Sit amet consecteturauris natoque name
                            pellentue augue mattis faucibus</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('main/images/service/service-1.jpg') }}" alt="Service Image">
                    </div>
                </div>
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="">Glamping Cabin</a></h3>
                        <p>Sit amet consecteturauris natoque name
                            pellentue augue mattis faucibus</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('main/images/service/service-2.jpg') }}" alt="Service Image">
                    </div>
                </div>
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="">RV Luxury Tent</a></h3>
                        <p>Sit amet consecteturauris natoque name
                            pellentue augue mattis faucibus</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('main/images/service/service-3.jpg') }}" alt="Service Image">
                    </div>
                </div>
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="">RV Luxury Tent</a></h3>
                        <p>Sit amet consecteturauris natoque name
                            pellentue augue mattis faucibus</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('main/images/service/service-2.jpg') }}" alt="Service Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Services Section ======-->

    <!--====== Start Features Section ======-->
    <section class="features-section pb-60">
        <div class="container">
            <div class="row">
                @forelse($facilities as $facility)
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="{{ $facility->icon }}"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">{{ $facility->title }}</h4>
                                <p>{{ $facility->subtitle }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="flaticon-rabbit"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">No Data Found</h4>
                                <p>No Data Found</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!--====== End Features Section ======-->

    <!--====== Start CTA Section ======-->
    <section class="cta-bg overlay bg_cover pt-140 pb-150" style="background-image: url({{ asset('main/images/bg/cta-bg.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--=== CTA Content Box ===-->
                    <div class="cta-content-box text-center text-white wow fadeInDown">
                        <h2 class="mb-35">Ready to Travel With Real
                            Adventure and Enjoy Natural</h2>
                        <a href="" class="main-btn primary-btn">Check Availability<i class="far fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End CTA Section ======-->

    <!--====== Start Fact Section ======-->
    <section class="fact-section pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-journey"></i>
                        </div>
                        <h2 class="number"><span class="count">3568</span>+</h2>
                        <p>Happy Traveler</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInDown">
                        <div class="icon">
                            <i class="flaticon-tent-1"></i>
                        </div>
                        <h2 class="number"><span class="count">8453</span>+</h2>
                        <p>Tent Sites</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-reviews"></i>
                        </div>
                        <h2 class="number"><span class="count">99.3</span>%</h2>
                        <p>Positive Reviews</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInDown">
                        <div class="icon">
                            <i class="flaticon-award"></i>
                        </div>
                        <h2 class="number"><span class="count">63</span>K</h2>
                        <p>Awards Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Fact Section ======-->

    <!--====== Start Testimonial Section ======-->
    <section class="testimonial-section pt-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--=== Section Title ===-->
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title">Testimonials</span>
                        <h2>What Our Traveler Say About Our Tour Services</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-xl-center">
                <div class="col-xl-5 col-lg-12 order-2 order-xl-1">
                    <!--=== Testimonial Image ===-->
                    <div class="testimonial-one_image-box mb-40 wow fadeInLeft">
                        <img src="{{ asset('main/images/testimonial/testimonial-1.jpg') }}" alt="Testimonial Image">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 order-1 order-xl-2">
                    <!--=== Testimonial Slider ===-->
                    <div class="testimonial-slider-one pl-lg-55 mb-40 wow fadeInRight">
                        <!--=== Testimonial Item ===-->
                        <div class="gw-testimonial-item">
                            <div class="testimonial-inner-content">
                                <div class="quote-rating-box">
                                    <div class="icon">
                                        <img src="{{ asset('main/images/testimonial/quote.png') }}" alt="quote icon">
                                    </div>
                                    <div class="ratings-box">
                                        <h4>Quality Services</h4>
                                        <ul class="ratings">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>To take a trivial example which of
                                    usev undertakes laborious physical
                                    exercise excepto obtain advantage
                                    from has any right to find fault with
                                    man who chooses to enjoy</p>
                                <div class="author-thumb-title">
                                    <div class="author-thumb">
                                        <img src="{{ asset('main/images/testimonial/author-1.jpg') }}" alt="Author Image">
                                    </div>
                                    <div class="author-title">
                                        <h3 class="title">Douglas D. Hall</h3>
                                        <p class="position">CEO & Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Testimonial Item ===-->
                        <div class="gw-testimonial-item">
                            <div class="testimonial-inner-content">
                                <div class="quote-rating-box">
                                    <div class="icon">
                                        <img src="{{ asset('main/images/testimonial/quote.png') }}" alt="quote icon">
                                    </div>
                                    <div class="ratings-box">
                                        <h4>Quality Services</h4>
                                        <ul class="ratings">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>To take a trivial example which of
                                    usev undertakes laborious physical
                                    exercise excepto obtain advantage
                                    from has any right to find fault with
                                    man who chooses to enjoy</p>
                                <div class="author-thumb-title">
                                    <div class="author-thumb">
                                        <img src="{{ asset('main/images/testimonial/author-1.jpg') }}" alt="Author Image">
                                    </div>
                                    <div class="author-title">
                                        <h3 class="title">Douglas D. Hall</h3>
                                        <p class="position">CEO & Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Testimonial Item ===-->
                        <div class="gw-testimonial-item">
                            <div class="testimonial-inner-content">
                                <div class="quote-rating-box">
                                    <div class="icon">
                                        <img src="{{ asset('main/images/testimonial/quote.png') }}" alt="quote icon">
                                    </div>
                                    <div class="ratings-box">
                                        <h4>Quality Services</h4>
                                        <ul class="ratings">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>To take a trivial example which of
                                    usev undertakes laborious physical
                                    exercise excepto obtain advantage
                                    from has any right to find fault with
                                    man who chooses to enjoy</p>
                                <div class="author-thumb-title">
                                    <div class="author-thumb">
                                        <img src="{{ asset('main/images/testimonial/author-1.jpg') }}" alt="Author Image">
                                    </div>
                                    <div class="author-title">
                                        <h3 class="title">Douglas D. Hall</h3>
                                        <p class="position">CEO & Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Testimonial Section ======-->

    <!--====== Start Blog Section ======-->
    <section class="blog-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <!--=== Section Title ===-->
                    <div class="section-title text-center mb-45 wow fadeInDown">
                        <span class="sub-title">News & Blog</span>
                        <h2>Amazing News & Blog For
                            Every Single Update</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Blog Post ===-->
                    <div class="single-blog-post mb-40 wow fadeInUp">
                        <div class="post-thumbnail">
                            <img src="{{ asset('main/images/blog/blog-1.jpg') }}" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <a href="#" class="cat-btn">Adventure</a>
                            <div class="post-meta">
                                <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                            </div>
                            <h3 class="title"><a href="">Meet Skeleton Svelte Taile Was
                                    Sind For Reactive UIs</a></h3>
                            <a href="" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Blog Post ===-->
                    <div class="single-blog-post mb-40 wow fadeInUp">
                        <div class="post-thumbnail">
                            <img src="{{ asset('main/images/blog/blog-2.jpg') }}" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <a href="#" class="cat-btn">Adventure</a>
                            <div class="post-meta">
                                <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                            </div>
                            <h3 class="title"><a href="">Web Vitals Tools Boost Your to
                                    Sen Performance Scores</a></h3>
                            <a href="" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Blog Post ===-->
                    <div class="single-blog-post mb-40 wow fadeInUp">
                        <div class="post-thumbnail">
                            <img src="{{ asset('main/images/blog/blog-3.jpg') }}" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <a href="#" class="cat-btn">Adventure</a>
                            <div class="post-meta">
                                <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                            </div>
                            <h3 class="title"><a href="">Smashing Podcast Episode See
                                    With Paul Billion-Dollar Idea</a></h3>
                            <a href="" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Blog Section ======-->

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
