<!--====== Start Breadcrumb Section ======-->
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{ asset('main/images/bg/page-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">{{ $title }}</h1>
                    <ul class="breadcrumb-link text-white">
                        @foreach ($links as $link)
                            @if (isset($link['url']))
                                <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
                            @else
                                <li class="active">{{ $link['label'] }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Breadcrumb Section ======-->
