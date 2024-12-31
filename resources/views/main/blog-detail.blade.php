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
                        <h1 class="page-title">Blog Detail</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li class="active">Blog Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Breadcrumb Section ======-->

    <!--====== Start Blog Details Section ======-->
    <section class="blog-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <!--=== Blog Details Wrapper ===-->
                    <div class="blog-details-wrapper pr-lg-50">
                        <div class="blog-post mb-60 wow fadeInUp">
                            <div class="post-thumbnail">
                                <img src="{{ asset('') }}main/images/blog/blog-single-1.jpg" alt="Blog Image">
                            </div>
                            <div class="post-meta text-center pt-25 pb-15 mb-25">
                                <span><i class="far fa-user"></i><a href="#">Matthew N. Davis</a></span>
                                <span><i class="far fa-calendar-alt"></i><a href="#">November 23,2022</a></span>
                                <span><i class="far fa-comment"></i><a href="#">Comments (05)</a></span>
                            </div>
                            <div class="main-post">
                                <div class="entry-content">
                                    <h3 class="title">50 Resources And Tools To Turbocharge Amazon
                                        Product Scraper Copywriting Skills</h3>
                                    <p>Sit amet consectetur adipiscing elit. Phasellus viverra justo, orci, interdum purus purus vitae vulputate nec
                                        Vel nunc vivamus felis sit est, mus aliquam massa volutpat. Consectetur scelerisque tincidunt vulputate quis.
                                        Metus eu, nisi nibh et adipiscing natoque tincidunt. Sed morbi arcu integer vestibulum scelerisque tincidunt
                                        mauris. Lectus molestie vestibulum ac, nec. Nisl rutrum cras dictum lectus molestie leoenim sapien aenean
                                        lectus. Platea enim nunc feugiat mauris, ut in volutpat nunc. Nulla sit rhoncus consequat malesuada magna diam tempor mauris proin vulputate tortorpurus nunc elementum quam pharetra mauris Habitant massa turpis nunc eu. Aliquet at velit etiam turpis a arcu consectetur sed.</p>
                                    <h4>Build Camping Easily</h4>
                                    <p>Metus eu, nisi nibh et adipiscing natoque tincidunt. Sed morbi arcu integer vestibulum scelerisque tincidunt
                                        mauris. Lectus molestie vestibulum ac, nec. Nisl rutrum cras dictum lectus molestie leoenim sapien aenean
                                        lectus. Platea enim nunc feugiat mauris, ut in volutpat nunc. Nulla sit rhoncus consequat</p>
                                    <blockquote class="block-quote">
                                        <img src="{{ asset('') }}main/images/blog/quote.png" alt="quote image">
                                        <h3>Handling Mounting And Unmounting Given
                                            Navigation Routes In React Native</h3>
                                        <span>Johnny M. Martin</span>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="entry-footer wow fadeInUp">
                                <div class="tag-links">
                                    <h6>Popular Tags</h6>
                                    <a href="#">Camping</a>
                                    <a href="#">Tent Camp</a>
                                    <a href="#">Couple Cabin</a>
                                </div>
                                <div class="social-share">
                                    <h6>Share News :</h6>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--===  Post Author Box  ===-->
                        <div class="post-author-box d-flex pb-60 mb-60 wow fadeInUp">
                            <div class="author-thumb">
                                <img src="{{ asset('') }}main/images/blog/author-1.jpg" alt="post author">
                            </div>
                            <div class="author-content">
                                <h5>Bruno R. Bouchard</h5>
                                <span class="position">Author</span>
                                <p>Donec duis enim ipsum odio at cursus. Fames semper enim integer epsum ultricies faucibus augue enim semper</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--===  Post Navigation  ===-->
                        <div class="post-navigation-item pb-30 mb-55 wow fadeInUp">
                            <div class="prev-post post-nav-item d-flex mb-30">
                                <div class="thumb">
                                    <img src="{{ asset('') }}main/images/blog/prev-post.jpg" alt="Post Thumb">
                                </div>
                                <div class="content">
                                    <h6><a href="">Web Quality Assurance
                                            Requirements To Web
                                            Dev Risk Manage</a></h6>
                                    <span class="post-date"><a href="#"><i class="far fa-calendar-alt"></i>November 23,2022</a></span>
                                </div>
                            </div>
                            <div class="next-post post-nav-item d-flex mb-30">
                                <div class="thumb">
                                    <img src="{{ asset('') }}main/images/blog/next-post.jpg" alt="Post Thumb">
                                </div>
                                <div class="content">
                                    <h6><a href="">Deep Dive Into Wonder
                                            World Of Displaements
                                            Filtering</a></h6>
                                    <span class="post-date"><a href="#"><i class="far fa-calendar-alt"></i>November 23,2022</a></span>
                                </div>
                            </div>
                        </div>
                        <!--===  Comments Area  ===-->
                        <div class="comments-area mb-60 wow fadeInUp">
                            <h5 class="comments-title mb-40">Popular Comments</h5>
                            <ul class="comments-list">
                                <li>
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <img src="{{ asset('') }}main/images/blog/comment-1.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Jonathan M. Dickinson<span class="date">September 25, 2022</span></span>
                                                <p>Nov ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                                                    laudantium, totam rem aperiam quae abillo inventore veritatis</p>
                                                <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comment-reply">
                                        <li>
                                            <div class="comment">
                                                <div class="comment-avatar">
                                                    <img src="{{ asset('') }}main/images/blog/comment-2.jpg" alt="comment author">
                                                </div>
                                                <div class="comment-wrap">
                                                    <div class="comment-author-content">
                                                        <span class="author-name">Jonathan M. Dickinson<span class="date">September 25, 2022</span></span>
                                                        <p>Nov ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                                                            laudantium, totam rem aperiam quae abillo inventore veritatis</p>
                                                        <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <img src="{{ asset('') }}main/images/blog/comment-3.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Michael C. Paille<span class="date">September 25, 2022</span></span>
                                                <p>Nov ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                                                    laudantium, totam rem aperiam quae abillo inventore veritatis</p>
                                                <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--===  Comments Form  ===-->
                        <div class="comments-respond mb-30 wow fadeInUp" id="comment-respond">
                            <h3 class="comments-heading">Leave a Comments</h3>
                            <p>Send us your valuable feedback about our services</p>
                            <form class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Enter Name" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea name="message" class="form_control" rows="4" placeholder="Write Comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button class="main-btn primary-btn">Send comments<i class="fas fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
    <!--====== End Blog Details Section ======-->

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
