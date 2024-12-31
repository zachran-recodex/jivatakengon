<x-main-layout>
    @include('layouts.main.header')

    <!--====== Start Breadcrumb Section ======-->
    <x-breadcrumb
        title="Gallery"
        :links="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Gallery']
    ]"
    />
    <!--====== End Breadcrumb Section ======-->

    <!--====== Start Gallery Section ======-->
    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item mb-30 wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('') }}main/images/gallery/gallery-1.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('') }}main/images/gallery/gallery-1.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item mb-30 wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('') }}main/images/gallery/gallery-2.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('') }}main/images/gallery/gallery-2.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item mb-30 wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('') }}main/images/gallery/gallery-3.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('') }}main/images/gallery/gallery-3.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item mb-30 wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('') }}main/images/gallery/gallery-4.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('') }}main/images/gallery/gallery-4.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item mb-30 wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('') }}main/images/gallery/gallery-5.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('') }}main/images/gallery/gallery-5.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item mb-30 wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('') }}main/images/gallery/gallery-6.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('') }}main/images/gallery/gallery-6.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Gallery Section ======-->

</x-main-layout>
