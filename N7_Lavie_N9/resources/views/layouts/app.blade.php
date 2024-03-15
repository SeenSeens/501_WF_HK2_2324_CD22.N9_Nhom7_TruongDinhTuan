<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('/frontend/vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('/frontend/vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('/frontend/vendor/drift-zoom/dist/drift-basic.min.css') }}"/>
    <link rel="stylesheet" media="screen"
          href="{{ asset('/frontend/vendor/lightgallery/css/lightgallery-bundle.min.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('/frontend/css/theme.min.css') }}">
    <!-- Scripts -->
    <!-- Styles -->
    @livewireStyles
    @livewireScripts
</head>
<!-- Body-->
<body class="handheld-toolbar-enabled">
<!-- Sign in / sign up modal-->
@include('layouts.frontend.singin-signup')
<main class="page-wrapper">
    <!-- Quick View Modal-->
    @include('layouts.frontend.quick-view')
    <!-- Navbar Electronics Store-->
    <livewire:header/>
    <!-- Hero (Banners + Slider)-->
    @yield ('content') @if ( isset($slot) ) {{ $slot }} @endif

    <!-- Products grid (Trending products)-->
    <!-- Promo banner-->
    {{--<section class="container mt-4 mb-grid-gutter">
        <div class="bg-faded-info rounded-3 py-4">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="px-4 pe-sm-0 ps-sm-5">
                        <span class="badge bg-danger">Limited Offer</span>
                        <h3 class="mt-4 mb-1 text-body fw-light">All new</h3>
                        <h2 class="mb-1">Last Gen iPad Pro</h2>
                        <p class="h5 text-body fw-light">at discounted price. Hurry up!</p>
                        <div class="countdown py-2 h4" data-countdown="07/01/2023 07:00:00 PM">
                            <div class="countdown-days"><span class="countdown-value"></span><span class="countdown-label text-muted">d</span></div>
                            <div class="countdown-hours"><span class="countdown-value"></span><span class="countdown-label text-muted">h</span></div>
                            <div class="countdown-minutes"><span class="countdown-value"></span><span class="countdown-label text-muted">m</span></div>
                            <div class="countdown-seconds"><span class="countdown-value"></span><span class="countdown-label text-muted">s</span></div>
                        </div>
                        <a class="btn btn-accent" href="#">View offers<i class="ci-arrow-right fs-ms ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-7"><img src="frontend/img/home/banners/offer.jpg" alt="iPad Pro Offer"></div>
            </div>
        </div>
    </section>--}}
    <!-- Brands carousel-->
    {{--<section class="container mb-5">
        <div class="tns-carousel border-end">
            <div class="tns-carousel-inner" data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/13.png" style="width: 165px;" alt="Brand"></a></div>
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/14.png" style="width: 165px;" alt="Brand"></a></div>
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/17.png" style="width: 165px;" alt="Brand"></a></div>
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/16.png" style="width: 165px;" alt="Brand"></a></div>
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/15.png" style="width: 165px;" alt="Brand"></a></div>
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/18.png" style="width: 165px;" alt="Brand"></a></div>
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/19.png" style="width: 165px;" alt="Brand"></a></div>
                <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="frontend/img/shop/brands/20.png" style="width: 165px;" alt="Brand"></a></div>
            </div>
        </div>
    </section>--}}
    <!-- Product widgets-->
    {{--<section class="container pb-4 pb-md-5">
        <div class="row">
            <!-- Bestsellers-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
                <div class="widget">
                    <h3 class="widget-title">Bestsellers</h3>
                    <div class="d-flex align-items-center pb-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/cart/widget/05.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$259.<small>00</small></span></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/cart/widget/06.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security Camera</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$122.<small>00</small></span></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/cart/widget/07.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S10</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$799.<small>00</small></span></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/cart/widget/08.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smart TV Box</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$67.<small>00</small></span>
                                <del class="text-muted fs-xs">$90.<small>43</small></del>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">...</p>
                    <a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
                </div>
            </div>
            <!-- New arrivals-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
                <div class="widget">
                    <h3 class="widget-title">New arrivals</h3>
                    <div class="d-flex align-items-center pb-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/06.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Monoblock Desktop PC</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$1,949.<small>00</small></span></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/07.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Laserjet Printer All-in-One</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/08.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Console Controller Charger</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$14.<small>97</small></span>
                                <del class="text-muted fs-xs">$16.<small>47</small></del>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/09.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Smart Watch Series 5, Aluminium</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$349.<small>99</small></span></div>
                        </div>
                    </div>
                    <p class="mb-0">...</p>
                    <a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
                </div>
            </div>
            <!-- Top rated-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
                <div class="widget">
                    <h3 class="widget-title">Top rated</h3>
                    <div class="d-flex align-items-center pb-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/10.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S9</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$749.<small>99</small></span>
                                <del class="text-muted fs-xs">$859.<small>99</small></del>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/11.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/12.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">360 Degrees Camera</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$98.<small>75</small></span></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2">
                        <a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="frontend/img/shop/widget/13.jpg" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Digital Camera 40MP</a></h6>
                            <div class="widget-product-meta"><span class="text-accent">$210.<small>00</small></span>
                                <del class="text-muted fs-xs">$249.<small>00</small></del>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">...</p>
                    <a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- YouTube feed-->
    {{--<section class="container pb-5 mb-md-3">
        <div class="border rounded-3 p-3">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="bg-secondary p-5 text-center">
                        <img class="d-block mb-4 mx-auto" src="frontend/img/home/yt-logo.png" width="120" alt="YouTube">
                        <div class="d-flex justify-content-center align-items-center mb-4"><img class="me-2" src="frontend/img/home/yt-subscribers.png" width="126" alt="YouTube Subscribers"><span class="fs-sm">250k+</span></div>
                        <a class="btn btn-primary border-0 btn-sm mb-3" href="#" style="background-color: #ff0000;"><i class="ci-add-user me-2"></i>Subscribe*</a>
                        <p class="fs-sm mb-0">*View latest gadgets reviews available for purchase in our store.</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-2">
                        <h2 class="h4 mb-3">Latest videos from Cartzilla channel</h2>
                        <a class="btn btn-outline-accent btn-sm mb-3" href="#">More videos<i class="ci-arrow-right fs-xs ms-1 me-n1"></i></a>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-4 col-6 mb-3">
                            <a class="d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/vS93u75NnPo" data-bs-toggle="video">
                                <div class="position-relative mb-2"><span class="badge bg-dark position-absolute bottom-0 end-0 mb-2 me-2">6:16</span><img class="w-100" src="frontend/img/home/video/cover01.jpg" alt="Video cover"></div>
                                <h6 class="fs-sm pt-1">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</h6>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6 mb-3">
                            <a class="d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/B6LaYgGogf0" data-bs-toggle="video">
                                <div class="position-relative mb-2"><span class="badge bg-dark position-absolute bottom-0 end-0 mb-2 me-2">7:27</span><img class="w-100" src="frontend/img/home/video/cover02.jpg" alt="Video cover"></div>
                                <h6 class="fs-sm pt-1">5 Super Useful Gadgets on Cartzilla You Must Have in 2020</h6>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6 mb-3">
                            <a class="d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/kB-ROfRS9V4" data-bs-toggle="video">
                                <div class="position-relative mb-2"><span class="badge bg-dark position-absolute bottom-0 end-0 mb-2 me-2">6:20</span><img class="w-100" src="frontend/img/home/video/cover03.jpg" alt="Video cover"></div>
                                <h6 class="fs-sm pt-1">Top 5 New Amazing Gadgets on Cartzilla You Must See</h6>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6 mb-3 d-lg-none">
                            <a class="d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/sJK67XXE_Rg" data-bs-toggle="video">
                                <div class="position-relative mb-2"><span class="badge bg-dark position-absolute bottom-0 end-0 mb-2 me-2">6:11</span><img class="w-100" src="frontend/img/home/video/cover04.jpg" alt="Video cover"></div>
                                <h6 class="fs-sm fw-bold pt-1">5 Amazing Construction Inventions and Working Tools Available...</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Blog + Instagram info cards-->
    {{--<section class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-md-6">
                <a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
                    <div class="card-body text-center">
                        <i class="ci-edit h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h5 mb-1">Read the blog</h3>
                        <p class="text-muted fs-sm">Latest store, fashion news and trends</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                    <div class="card-body text-center">
                        <i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                        <h3 class="h5 mb-1">Follow on Instagram</h3>
                        <p class="text-muted fs-sm">#ShopWithCartzilla</p>
                    </div>
                </a>
            </div>
        </div>
    </section>--}}
</main>
<!-- Footer-->
<livewire:footer/>
<!-- Toolbar for handheld devices (Default)-->
<div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item"
                                                     href="account-wishlist.html"><span class="handheld-toolbar-icon"><i
                        class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a
                class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i
                        class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a
                class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i
                        class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span
                    class="handheld-toolbar-label">$265.00</span></a></div>
</div>
<!-- Back To Top Button-->
<a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i
            class="btn-scroll-top-icon ci-arrow-up"> </i></a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="{{ asset('/frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/frontend/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('/frontend/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
<script src="{{ asset('/frontend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('/frontend/vendor/drift-zoom/dist/Drift.min.js"') }}></script>
<script src="{{ asset('/frontend/vendor/lightgallery/lightgallery.min.js') }}"></script>
<script src="{{ asset('/frontend/vendor/lightgallery/plugins/video/lg-video.min.js') }}"></script>
<!-- Main theme script-->
<script src="{{ asset('/frontend/js/theme.min.js') }}"></script>
</body>
</html>
