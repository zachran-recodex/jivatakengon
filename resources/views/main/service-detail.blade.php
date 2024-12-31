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

    <!--====== Start Place Details Section ======-->
    <section class="place-details-section">
        <!--=== Place Slider ===-->
        <div class="place-slider-area overflow-hidden wow fadeInUp">
            <div class="place-slider">
                <div class="place-slider-item">
                    <div class="place-img">
                        <img src="{{ asset('') }}main/images/place/single-place-1.jpg" alt="Place Image">
                    </div>
                </div>
                <div class="place-item">
                    <div class="place-img">
                        <img src="{{ asset('') }}main/images/place/single-place-2.jpg" alt="Place Image">
                    </div>
                </div>
                <div class="place-slider-item">
                    <div class="place-img">
                        <img src="{{ asset('') }}main/images/place/single-place-3.jpg" alt="Place Image">
                    </div>
                </div>
                <div class="place-slider-item">
                    <div class="place-img">
                        <img src="{{ asset('') }}main/images/place/single-place-2.jpg" alt="Place Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!--=== Tour Details Wrapper ===-->
            <div class="tour-details-wrapper pt-80">
                <!--=== Tour Title Wrapper ===-->
                <div class="tour-title-wrapper pb-30 wow fadeInUp">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="tour-title mb-20">
                                <h3 class="title">Boat Traveling on Made River</h3>
                                <p><i class="far fa-map-marker-alt"></i>Tambon Khlong Sok, Thailand</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="tour-widget-info">
                                <div class="info-box mb-20">
                                    <div class="icon">
                                        <i class="fal fa-box-usd"></i>
                                    </div>
                                    <div class="info">
                                        <h4><span>From</span>$96.54</h4>
                                    </div>
                                </div>
                                <div class="info-box mb-20">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="info">
                                        <h4><span>Durations</span>7 Days</h4>
                                    </div>
                                </div>
                                <div class="info-box mb-20">
                                    <div class="icon">
                                        <i class="fal fa-planet-ringed"></i>
                                    </div>
                                    <div class="info">
                                        <h4><span>Tour Type</span>City Tour</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Tour Area Nav ===-->
                <div class="tour-area-nav pt-20 pb-20 wow fadeInUp">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="ratings-box">
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><a href="#">(3k Riviews)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="share-nav">
                                <a href="#">Share<i class="far fa-share"></i></a>
                                <a href="#">Reviews<i class="far fa-share"></i></a>
                                <a href="#">Whislist<i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <!--=== Place Content Wrap ===-->
                        <div class="place-content-wrap pt-45 wow fadeInUp">
                            <h3 class="title">Explore Tours</h3>
                            <p>Sed ut perspiciatis unde omniste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ip quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                                enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores
                                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor si amet
                                consectetur adipisci velit sed quian numquam eius modi tempora incidunt ut labore dolore magnam aliquam
                                quaerat voluptatem. Ut enim ad minima veniam qunostrum exercitationem ullam corporis suscipit laboriosaey
                                nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                esse quam nihil molestiae consequatur veillum qui dolorem voluptas nulla pariatur</p>
                            <h4>Advance Facilities</h4>
                            <p>Neque porro quisquam est dolorem ipsum quia dolor si amet consectetur adipisci velit sed quian numquam eius tempora incidunt labore dolore magnam aliquam quaerat voluptatem.</p>
                            <div class="row align-items-lg-center">
                                <div class="col-lg-5">
                                    <ul class="check-list">
                                        <li><i class="fas fa-badge-check"></i>Parking in the Camp</li>
                                        <li><i class="fas fa-badge-check"></i>Pick and Drop Services</li>
                                        <li><i class="fas fa-badge-check"></i>Washing Machines</li>
                                        <li><i class="fas fa-badge-check"></i>Cruise Dinner & Music Event</li>
                                        <li><i class="fas fa-badge-check"></i>Visit 5 Best Places With Group</li>
                                        <li><i class="fas fa-badge-check"></i>Motorhome service</li>
                                        <li><i class="fas fa-badge-check"></i>1 Meal Per Day</li>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <img src="{{ asset('') }}main/images/place/single-place-4.jpg" class="mb-20 w-100" alt="place image">
                                </div>
                            </div>
                            <h4>Tour Plan</h4>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
                                vel eillum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                        </div>
                        <!--=== Days Area ===-->
                        <div class="days-area mb-55 wow fadeInUp">
                            <ul class="nav nav-tabs mb-35">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#day1">Day 1st</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#day2">Day 2nd</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#day3">Day 3rd</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#day4">Day 4th</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#day5">Day 5th</button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="day1">
                                    <div class="content-box">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magne doloreseos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor si amet consectetur adipisci velit sed quian numquam eius modi tempora incidunt</p>
                                        <ul class="check-list">
                                            <li><i class="fas fa-badge-check"></i>Parking in the Camp</li>
                                            <li><i class="fas fa-badge-check"></i>kayaking Sport</li>
                                            <li><i class="fas fa-badge-check"></i>Mountain Hiking</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day2">
                                    <div class="content-box">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magne doloreseos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor si amet consectetur adipisci velit sed quian numquam eius modi tempora incidunt</p>
                                        <ul class="check-list">
                                            <li><i class="fas fa-badge-check"></i>Parking in the Camp</li>
                                            <li><i class="fas fa-badge-check"></i>kayaking Sport</li>
                                            <li><i class="fas fa-badge-check"></i>Mountain Hiking</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day3">
                                    <div class="content-box">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magne doloreseos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor si amet consectetur adipisci velit sed quian numquam eius modi tempora incidunt</p>
                                        <ul class="check-list">
                                            <li><i class="fas fa-badge-check"></i>Parking in the Camp</li>
                                            <li><i class="fas fa-badge-check"></i>kayaking Sport</li>
                                            <li><i class="fas fa-badge-check"></i>Mountain Hiking</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day4">
                                    <div class="content-box">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magne doloreseos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor si amet consectetur adipisci velit sed quian numquam eius modi tempora incidunt</p>
                                        <ul class="check-list">
                                            <li><i class="fas fa-badge-check"></i>Parking in the Camp</li>
                                            <li><i class="fas fa-badge-check"></i>kayaking Sport</li>
                                            <li><i class="fas fa-badge-check"></i>Mountain Hiking</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day5">
                                    <div class="content-box">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magne doloreseos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor si amet consectetur adipisci velit sed quian numquam eius modi tempora incidunt</p>
                                        <ul class="check-list">
                                            <li><i class="fas fa-badge-check"></i>Parking in the Camp</li>
                                            <li><i class="fas fa-badge-check"></i>kayaking Sport</li>
                                            <li><i class="fas fa-badge-check"></i>Mountain Hiking</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Map Box ===-->
                        <div class="map-box mb-60 wow fadeInUp">
                            <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                        <!--=== Calendar Box ===-->
                        <div class="calendar-wrapper wow fadeInUp">
                            <div class="calendar-container mb-45"></div>
                        </div>
                        <!--=== Releted Tour Place ===-->
                        <div class="related-tour-place wow fadeInUp">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="section-title mb-35">
                                        <h3>Related Tours</h3>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="place-arrows mb-35"></div>
                                </div>
                            </div>
                            <div class="recent-place-slider">
                                <!--=== Single Place Item ===-->
                                <div class="single-place-item mb-60">
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
                                            <h4 class="title"><a href="">Man and Woman Walks on Dock</a></h4>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>North Province, Maldives</p>
                                            <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                            <div class="meta">
                                                <span><i class="far fa-clock"></i>05 Days</span>
                                                <span><i class="far fa-user"></i>25</span>
                                                <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--=== Single Place Item ===-->
                                <div class="single-place-item mb-60">
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
                                            <h4 class="title"><a href="">Trees Under White Clouds during Daytime</a></h4>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>North Province, Maldives</p>
                                            <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                            <div class="meta">
                                                <span><i class="far fa-clock"></i>05 Days</span>
                                                <span><i class="far fa-user"></i>25</span>
                                                <span><a href="">Details<i class="far fa-long-arrow-right"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--=== Single Place Item ===-->
                                <div class="single-place-item mb-60">
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
                                            <h4 class="title"><a href="">Body of Water Near Mountain</a></h4>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>North Province, Maldives</p>
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
                        <!--=== Reviews Area ===-->
                        <div class="reviews-wrapper mb-60 wow fadeInUp">
                            <div class="reviews-inner-box">
                                <div class="rating-value">
                                    <h4>Clients Reviews</h4>
                                    <div class="rate-score">4.9</div>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><a href="#">(4.9)</a></li>
                                    </ul>
                                    <span class="reviews">3k Reviews</span>
                                </div>
                                <div class="reviews-progress">
                                    <div class="single-progress-bar">
                                        <div class="progress-title">
                                            <h6>Quality <span class="rate">4.8</span></h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" style="width: 85%"></div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="progress-title">
                                            <h6>Team Member<span class="rate">4.6</span></h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" style="width: 75%"></div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="progress-title">
                                            <h6>Locations<span class="rate">4.7</span></h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" style="width: 90%"></div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="progress-title">
                                            <h6>Cost<span class="rate">4.9</span></h6>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" style="width: 95%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Comments Area ===-->
                        <div class="comments-area wow fadeInUp">
                            <ul class="comment-list">
                                <li>
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <img src="{{ asset('') }}main/images/place/comment-1.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Glenn M. Whitaker<span class="time"><i class="far fa-clock"></i>5 Minute Ago</span></span>
                                                <span class="position">CEO & Founder</span>
                                                <ul class="comment-rating-ul">
                                                    <li>
                                                        <span class="title">Quality</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Location</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Services</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Team</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Price</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepture</p>
                                                <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comment-reply">
                                        <li>
                                            <div class="comment">
                                                <div class="comment-avatar">
                                                    <img src="{{ asset('') }}main/images/place/comment-2.jpg" alt="comment author">
                                                </div>
                                                <div class="comment-wrap">
                                                    <div class="comment-author-content">
                                                        <span class="author-name">Glenn M. Whitaker<span class="time"><i class="far fa-clock"></i>5 Minute Ago</span></span>
                                                        <span class="position">CEO & Founder</span>
                                                        <ul class="comment-rating-ul">
                                                            <li>
                                                                <span class="title">Quality</span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li>
                                                                <span class="title">Location</span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li>
                                                                <span class="title">Services</span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li>
                                                                <span class="title">Team</span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li>
                                                                <span class="title">Price</span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                            </li>
                                                        </ul>
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepture</p>
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
                                            <img src="{{ asset('') }}main/images/place/comment-3.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Glenn M. Whitaker<span class="time"><i class="far fa-clock"></i>5 Minute Ago</span></span>
                                                <span class="position">CEO & Founder</span>
                                                <ul class="comment-rating-ul">
                                                    <li>
                                                        <span class="title">Quality</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Location</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Services</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Team</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Price</span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepture</p>
                                                <a href="#" class="btn-link">Reply<i class="far fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--===  Comments Form  ===-->
                        <div class="comments-respond mb-30 wow fadeInUp">
                            <h3 class="comments-heading" style="margin-bottom: 15px;">Leave a Comments</h3>
                            <ul class="comment-rating-ul mb-20">
                                <li>
                                    <span class="title">Quality</span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span class="title">Location</span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span class="title">Services</span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span class="title">Team</span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span class="title">Price</span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                            </ul>
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
                    <div class="col-xl-4">
                        <!--=== Sidebar Widget Area ===-->
                        <div class="sidebar-widget-area pt-60 pl-lg-30">
                            <!--=== Booking Widget ===-->
                            <div class="sidebar-widget booking-form-widget wow fadeInUp mb-40">
                                <h4 class="widget-title">Booking Tour</h4>
                                <form class="sidebar-booking-form">
                                    <div class="booking-date-time mb-20">
                                        <div class="booking-item">
                                            <label>Date</label>
                                            <div class="bk-item booking-time">
                                                <i class="far fa-calendar-alt"></i>
                                                <input type="text" placeholder="Select Date" class="datepicker">
                                            </div>
                                        </div>
                                        <div class="booking-item">
                                            <label>Time</label>
                                            <div class="bk-item booking-date">
                                                <i class="far fa-calendar-alt"></i>
                                                <select class="wide">
                                                    <option value="01">12.00 Am</option>
                                                    <option value="01">01.00 Am</option>
                                                    <option value="01">02.00 Am</option>
                                                    <option value="01">03.00 Am</option>
                                                    <option value="01">04.00 Am</option>
                                                    <option value="01">05.00 Am</option>
                                                    <option value="01">06.00 Am</option>
                                                    <option value="01">07.00 Am</option>
                                                    <option value="01">08.00 Am</option>
                                                    <option value="01">09.00 Am</option>
                                                    <option value="01">10.00 Am</option>
                                                    <option value="01">11.00 Am</option>
                                                    <option value="01">12.00 Pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-guest-box mb-20">
                                        <h6 class="mb-20">Tickets</h6>
                                        <div class="booking-item">
                                            <label>Adult (18+ years) $43</label>
                                            <div class="bk-item booking-user">
                                                <i class="far fa-user"></i>
                                                <select class="wide">
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="booking-item">
                                            <label>Youth (13-17 years) $29</label>
                                            <div class="bk-item booking-user">
                                                <i class="far fa-user"></i>
                                                <select class="wide">
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="booking-item">
                                            <label>Child (0-12 years) $0</label>
                                            <div class="bk-item booking-user">
                                                <i class="far fa-user"></i>
                                                <select class="wide">
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-extra mb-15 wow fadeInUp">
                                        <h6 class="mb-10">Aditional Services</h6>
                                        <div class="extra">
                                            <i class="fas fa-check-circle"></i>Service Per Boooking <span><span class="currency">$</span>50</span>
                                        </div>
                                        <div class="extra">
                                            <i class="fas fa-check-circle"></i>Service Per Person <span><span class="currency">$</span>20</span>
                                        </div>
                                    </div>
                                    <div class="booking-total mb-20">
                                        <div class="total">
                                            <label>Total</label>
                                            <span class="price"><span class="currency">$</span>70</span>
                                        </div>
                                    </div>
                                    <div class="submit-button">
                                        <button class="main-btn primary-btn">Booking Now<i class="far fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--=== Booking Info Widget ===-->
                            <div class="sidebar-widget booking-info-widget wow fadeInUp mb-40">
                                <h4 class="widget-title">Tour Information</h4>
                                <ul class="info-list">
                                    <li><span><i class="far fa-user-circle"></i>Max Guests<span>35</span></span></li>
                                    <li><span><i class="far fa-user-circle"></i>Minimum Age<span>12+</span></span></li>
                                    <li><span><i class="far fa-map-marker-alt"></i>Tour Location<span>Thailand</span></span></li>
                                    <li><span><i class="far fa-globe"></i>Language<span>English</span></span></li>
                                </ul>
                            </div>
                            <!--=== Recent Place Widget ===-->
                            <div class="sidebar-widget recent-place-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">Last Minute Deals</h4>
                                <ul class="recent-place-list">
                                    <li class="place-thumbnail-content">
                                        <img src="{{ asset('') }}main/images/place/thumb-1.jpg" alt="post thumb">
                                        <div class="place-content">
                                            <ul class="ratings">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h5><a href="">Infinity Pool Nears
                                                    Beach</a></h5>
                                            <span class="price"><span class="text">From :</span><span class="currency">$</span>45.23</span>
                                        </div>
                                    </li>
                                    <li class="place-thumbnail-content">
                                        <img src="{{ asset('') }}main/images/place/thumb-2.jpg" alt="post thumb">
                                        <div class="place-content">
                                            <ul class="ratings">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star-half-alt"></i></li>
                                            </ul>
                                            <h5><a href="">Infinity Pool Nears
                                                    Beach</a></h5>
                                            <span class="price"><span class="text">From :</span><span class="currency">$</span>45.23</span>
                                        </div>
                                    </li>
                                    <li class="place-thumbnail-content">
                                        <img src="{{ asset('') }}main/images/place/thumb-3.jpg" alt="post thumb">
                                        <div class="place-content">
                                            <ul class="ratings">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <h5><a href="">Infinity Pool Nears
                                                    Beach</a></h5>
                                            <span class="price"><span class="text">From :</span><span class="currency">$</span>45.23</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Place Details Section ======-->

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
