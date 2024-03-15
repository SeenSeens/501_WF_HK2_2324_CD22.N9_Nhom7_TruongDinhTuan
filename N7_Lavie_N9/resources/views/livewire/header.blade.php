<header class="shadow-sm">
    <!-- Topbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="/"><img src="{{ asset('frontend/img/logo-dark.png') }}" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2" href="index.html"><img src="frontend/img/logo-icon.png" width="74" alt="Cartzilla"></a>
                <!-- Search-->
                <div class="input-group d-none d-lg-flex flex-nowrap mx-4">
                    <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded-start w-100" type="text" placeholder="Search for products">
                    <select class="form-select flex-shrink-0" style="width: 10.5rem;">
                        <option>All categories</option>
                        @foreach( $categories as $category)
                            <option>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Toolbar-->
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
                    <a class="navbar-tool navbar-stuck-toggler" href="#">
                        <span class="navbar-tool-tooltip">Toggle menu</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                    </a>
                    <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                        <div class="navbar-tool-text ms-n3"><small>Hello, Sign in</small>My Account</div>
                    </a>
                    <div class="navbar-tool dropdown ms-3">
                        <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="/"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>My Cart</small>$1,247.00</a>
                        <!-- Cart dropdown-->
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                                <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="widget-cart-item pb-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="d-block flex-shrink-0" href="/"><img src="{{ asset('frontend/frontend/img/shop/cart/widget/05.jpg') }}" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="">Bluetooth Headphones</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$259.<small>00</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-cart-item py-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="d-block flex-shrink-0" href="/"><img src="{{ asset('frontend/frontend/img/shop/cart/widget/06.jpg') }}" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="/">Cloud Security Camera</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$122.<small>00</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-cart-item py-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="d-block flex-shrink-0" href="/"><img src="{{ asset('frontend/frontend/img/shop/cart/widget/07.jpg') }}" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="/">Android Smartphone S10</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$799.<small>00</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-cart-item py-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="d-block flex-shrink-0" href="/"><img src="{{ asset('frontend/img/shop/cart/widget/08.jpg') }}" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="/">Android Smart TV Box</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$67.<small>00</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                    <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">$1,247.<small>00</small></span></div>
                                    <a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart<i class="ci-arrow-right ms-1 me-n1"></i></a>
                                </div>
                                <a class="btn btn-primary btn-sm d-block w-100" href=""><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Search-->
                    <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input class="form-control rounded-start" type="text" placeholder="Search for products">
                    </div>
                    <!-- Departments menu-->
                    <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ci-menu align-middle mt-n1 me-2"></i>Departments</a>
                            <ul class="dropdown-menu">
                                @foreach( $categories as $category)
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="#">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/shop') }}">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}" >About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
