<x-main-layout>
    @include('layouts.main.header')

    <!--====== Start Breadcrumb Section ======-->
    <x-breadcrumb
        title="Contact Us"
        :links="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Contact']
    ]"
    />
    <!--====== End Breadcrumb Section ======-->

    <!--====== Start Info Section ======-->
    <section class="contact-info-section pt-100 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--=== Section Title ===-->
                    <div class="section-title text-center mb-45 wow fadeInDown">
                        <span class="sub-title">Contact Us</span>
                        <h2>Ready to Get Our Best Services!
                            Feel Free to Contact With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Contact Info Item ===-->
                    <div class="contact-info-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <img src="{{ asset('main/images/icon/icon-1.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Office Location</span>
                            <p>55 Main Street, 2nd Floor
                                New York City</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Contact Info Item ===-->
                    <div class="contact-info-item text-center mb-40 wow fadeInDown">
                        <div class="icon">
                            <img src="{{ asset('main/images/icon/icon-2.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Email Address</span>
                            <p><a href="mailto:supportinfo@gmail.com">supportinfo@gmail.com</a></p>
                            <p><a href="mailto:traveladventure.net">traveladventure.net</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Contact Info Item ===-->
                    <div class="contact-info-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <img src="{{ asset('main/images/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Hotline</span>
                            <p><a href="tel:+000(123)45688">+000 (123) 456 88</a></p>
                            <p><a href="tel:+8596320">+859 63 20</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Info Section ======-->

    <!--====== Start Contact Map Section ======-->
    <section class="contact-page-map pb-100 wow fadeInUp">
        <!--=== Map Box ===-->
        <div class="map-box">
            <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
    </section>
    <!--====== End Contact Map Section ======-->

    <!--====== Start Contact Section ======-->
    <section class="contact-section pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title">Get In Touch</span>
                        <h2>Send Us Message</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-area contact-form wow fadeInUp">
                        <form id="contactForm" class="contactForm" action="" name="contactForm" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_group form-group">
                                        <input type="text" placeholder="Name" class="form_control" name="name" id="name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group form-group">
                                        <input type="text" placeholder="Phone Number" class="form_control" id="phone_number" name="phone_number" required data-error="Please enter your number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group form-group">
                                        <input type="email" placeholder="Email Address" class="form_control" name="email" id="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group form-group">
                                        <input type="text" placeholder="Website" class="form_control" id="website" name="website" required data-error="Please enter your website">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group form-group">
                                        <textarea name="message" id="message" placeholder="Write Message" class="form_control" rows="6" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group form-group text-center">
                                        <button class="main-btn primary-btn">Send Us Message<i class="fas fa-paper-plane"></i></button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Section ======-->

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
