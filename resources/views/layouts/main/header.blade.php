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
                            <li class="menu-item">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="menu-item has-children"><a href="#">Service</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('service') }}">Service List</a></li>
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
                    <div class="lang-dropdown">
                        <select class="wide">
                            <option value="English">English</option>
                            <option value="French">French</option>
                        </select>
                    </div>
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
<!--====== End Header ======-->
