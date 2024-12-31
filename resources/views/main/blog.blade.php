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
                        <h1 class="page-title">Blog</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Breadcrumb Section ======-->

    <!--====== Start Blog Section ======-->
    <section class="blog-list-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <!--=== Blog List Wrapper ===-->
                    <div class="blog-list-wrapper">
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-four mb-30 wow fadeInDown">
                            <div class="post-thumbnail">
                                <img src="{{ asset('') }}main/images/blog/blog-13.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                </div>
                                <h3 class="title"><a href="">Meet Skeleton
                                        Svelte Taile Sindey
                                        For Reactive UIs</a></h3>
                                <h6 class="author"><i class="far fa-user"></i><a href="#">Matthew N. Davis</a></h6>
                                <a href="" class="main-btn filled-btn">Read More<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-four mb-30 wow fadeInDown">
                            <div class="post-thumbnail">
                                <img src="{{ asset('') }}main/images/blog/blog-14.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                </div>
                                <h3 class="title"><a href="">Resolving Conflicts
                                        Between Designers And Engineers</a></h3>
                                <h6 class="author"><i class="far fa-user"></i><a href="#">Matthew N. Davis</a></h6>
                                <a href="" class="main-btn filled-btn">Read More<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-four mb-30 wow fadeInDown">
                            <div class="post-thumbnail">
                                <img src="{{ asset('') }}main/images/blog/blog-15.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                </div>
                                <h3 class="title"><a href="">Meet Skeleton
                                        Svelte Taile Sindey
                                        For Reactive UIs</a></h3>
                                <h6 class="author"><i class="far fa-user"></i><a href="#">Matthew N. Davis</a></h6>
                                <a href="" class="main-btn filled-btn">Read More<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-four mb-30 wow fadeInDown">
                            <div class="post-thumbnail">
                                <img src="{{ asset('') }}main/images/blog/blog-16.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                </div>
                                <h3 class="title"><a href="">Using Automated
                                        To Results Improve
                                        Accessibility</a></h3>
                                <h6 class="author"><i class="far fa-user"></i><a href="#">Matthew N. Davis</a></h6>
                                <a href="" class="main-btn filled-btn">Read More<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-four mb-30 wow fadeInDown">
                            <div class="post-thumbnail">
                                <img src="{{ asset('') }}main/images/blog/blog-17.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                </div>
                                <h3 class="title"><a href="">Usability Journey
                                        Of Drupal’s Primary
                                        Navigation</a></h3>
                                <h6 class="author"><i class="far fa-user"></i><a href="#">Matthew N. Davis</a></h6>
                                <a href="" class="main-btn filled-btn">Read More<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-four mb-30 wow fadeInDown">
                            <div class="post-thumbnail">
                                <img src="{{ asset('') }}main/images/blog/blog-18.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                </div>
                                <h3 class="title"><a href="">Voice Usability Consideration For
                                        Partially Visually</a></h3>
                                <h6 class="author"><i class="far fa-user"></i><a href="#">Matthew N. Davis</a></h6>
                                <a href="" class="main-btn filled-btn">Read More<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Pagination ===-->
                    <ul class="gowilds-pagination wow fadeInDown mt-60 mb-30">
                        <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar-widget-area">
                        <!--=== Search Widget ===-->
                        <div class="sidebar-widget search-widget mb-30 wow fadeInUp">
                            <h4 class="widget-title">Search</h4>
                            <form>
                                <div class="form_group">
                                    <label><i class="far fa-search"></i></label>
                                    <input type="text" class="form_control" placeholder="Keywords" name="search" required>
                                </div>
                            </form>
                        </div>
                        <!--=== Category Widget ===-->
                        <div class="sidebar-widget category-widget mb-30 wow fadeInUp">
                            <h4 class="widget-title">Category</h4>
                            <ul class="category-nav">
                                <li><a href="#">Tent Camping<i class="far fa-arrow-right"></i></a></li>
                                <li><a href="#">Family Camping<i class="far fa-arrow-right"></i></a></li>
                                <li><a href="#">Wild Camping<i class="far fa-arrow-right"></i></a></li>
                                <li><a href="#">Campfire <i class="far fa-arrow-right"></i></a></li>
                                <li><a href="#">Luxury Cabin <i class="far fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!--=== Recent Post Widget ===-->
                        <div class="sidebar-widget recent-post-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">Recent News</h4>
                            <ul class="recent-post-list">
                                <li class="post-thumbnail-content">
                                    <img src="{{ asset('') }}main/images/blog/post-thumb-1.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h5><a href="">Quality Assurance
                                                Requirements Web
                                                Dev Risk Manage</a></h5>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">November 23,2022</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="{{ asset('') }}main/images/blog/post-thumb-2.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h5><a href="">Deep Div Wonder
                                                World Of Displaem
                                                Filtering</a></h5>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">November 23,2022</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="{{ asset('') }}main/images/blog/post-thumb-3.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h5><a href="">Handling Mountin mountin Naviation
                                                Routes In Native</a></h5>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">November 23,2022</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--=== Banner Widget ===-->
                        <div class="sidebar-widget sidebar-banner-widget wow fadeInUp mb-40">
                            <div class="banner-widget-content">
                                <div class="banner-img">
                                    <img src="{{ asset('') }}main/images/blog/banner-1.jpg" alt="Post Banner">
                                    <div class="hover-overlay">
                                        <div class="hover-content">
                                            <h4 class="title"><a href="#">Swimming Pool</a></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Marrakesh, Morocco</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Tag Widget ===-->
                        <div class="sidebar-widget tag-cloud-widget gray-bg mb-40 wow fadeInUp">
                            <h4 class="widget-title">Products Tags</h4>
                            <a href="#">Camping</a>
                            <a href="#">Tent Camp</a>
                            <a href="#">Campfire</a>
                            <a href="#">Luxury Cabin</a>
                            <a href="#">Safari Tent</a>
                            <a href="#">House Tree</a>
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
