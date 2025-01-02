<x-main-layout>
    @include('layouts.main.header')

    <!--====== Start Breadcrumb Section ======-->
    <x-breadcrumb
        title="Event"
        :links="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Event']
    ]"
    />
    <!--====== End Breadcrumb Section ======-->

    <!--====== Start Booking Section ======-->
    <section class="booking-form-section">
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

    <!--====== Start Events Section ======-->
    <section class="events-section pt-100 pb-100">
        <div class="container">
            <!--====== Products Filter ======-->
            <div class="page-item-filter mb-40 wow fadeInUp">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <!--====== Show Text ======-->
                        <div class="show-text mb-20">
                            <h6>Showing Results 09 Of 55</h6>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!--====== Product Dropdown ======-->
                        <div class="product-dropdown float-md-end">
                            <span class="title">Sort By</span>
                            <select class="wide">
                                <option data-display="Default">Default</option>
                                <option value="01">Best Event</option>
                                <option value="02">New Events</option>
                                <option value="03">Upcoming Event</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse($events as $event)
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="single-event-item mb-30 wow fadeInUp">
                            <div class="img-holder">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}">
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">{{ $event->event_date }}</a></span>
                                    <h3 class="title">
                                        <a href="#">
                                            {{ $event->title }}
                                        </a>
                                    </h3>
                                    <p class="location"><i class="far fa-map-marker-alt"></i> Gaafu Dhaalu Atoll, Maldives</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="single-event-item mb-30 wow fadeInUp">
                            <div class="img-holder">
                                <img src="{{ asset('main/images/event/event-1.jpg') }}" alt="Event Image">
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">No Data Found</a></span>
                                    <h3 class="title"><a href="#">No Data Found</a></h3>
                                    <p class="location"><i class="far fa-map-marker-alt"></i> No Data Found</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="row">
                <div class="col-lg-12">
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
    <!--====== End Events Section ======-->

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
