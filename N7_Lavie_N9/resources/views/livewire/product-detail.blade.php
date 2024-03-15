
@extends('layouts.app')
@section('content')
<main>
    <!-- Custom page title -->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="/shop">Shop</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Product Detail</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                @if($product)
                    <h1 class="h3 text-light mb-2">{{ $product->title }}</h1>
                    <div>
                    <div class="star-rating">
                        <i class="star-rating-icon ci-star-filled active"></i>
                        <i class="star-rating-icon ci-star-filled active"></i>
                        <i class="star-rating-icon ci-star-filled active"></i>
                        <i class="star-rating-icon ci-star-filled active"></i>
                        <i class="star-rating-icon ci-star"></i>
                    </div>
                    <span class="d-inline-block fs-sm text-white opacity-70 align-middle mt-1 ms-1">74 Reviews</span>
                </div>
                @else
                    <p>Product not found</p>
                @endif
            </div>
        </div>
    </div>
    <!-- Custom Detail-->
    <div class="container">
        <div class="bg-light shadow-lg rounded-3">
            <!-- Tabs-->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link py-4 px-sm-4 active" href="#general" data-bs-toggle="tab" role="tab" aria-selected="true">General <span class="d-none d-sm-inline">Info</span></a></li>
            </ul>
            <div class="px-4 pt-lg-3 pb-3 mb-5">
                <div class="tab-content px-lg-3">
                    <!-- General info tab-->
                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                        <div class="row">
                            <!-- Product gallery-->
                            <div class="col-lg-7 pe-lg-0">
                                <div class="product-gallery">
                                    <div class="product-gallery-thumblist order-sm-1">
                                        <!-- Display product images dynamically -->
                                        <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Product thumb">
                                    </div>
                                </div>
                            </div>
                            <!-- Product details-->
                            <div class="col-lg-5 pt-4 pt-lg-0">
                                <div class="product-details ms-auto pb-3">
                                    Price
                                    <!-- Display product price and discount dynamically -->
                                    <div class="h3 fw-normal mb-3 me-1 text-decoration-line-through"> <small>{{ $product->price . ' VNĐ'}} </small></div>
                                    <div class="h3 fw-normal text-accent mb-3 me-1">{{ $product->discount . ' VNĐ' }}</div>
                                    <div class="d-flex align-items-center pt-2 pb-4">
                                        <select class="form-select me-3" style="width: 5rem;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <button class="btn btn-primary btn-shadow d-block w-100" type="button"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="w-100 me-3">
                                            <button class="btn btn-secondary d-block w-100" type="button"><i class="ci-heart fs-lg me-2"></i><span class="d-none d-sm-inline">Add to </span>Wishlist</button>
                                        </div>
                                        <div class="w-100">
                                            <button class="btn btn-secondary d-block w-100" type="button"><i class="ci-compare fs-lg me-2"></i>Compare</button>
                                        </div>
                                    </div>
                                    <!-- Product panels-->
                                    <div class="accordion mb-4" id="productPanels">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header"><a class="accordion-button" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>Shipping options</a></h3>
                                            <div class="accordion-collapse collapse show" id="shippingOptions" data-bs-parent="#productPanels">
                                                <div class="accordion-body fs-sm">
                                                    <div class="d-flex justify-content-between border-bottom pb-2">
                                                        <div>
                                                            <div class="fw-semibold text-dark">Local courier shipping</div>
                                                            <div class="fs-sm text-muted">2 - 4 days</div>
                                                        </div>
                                                        <div>$16.50</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between border-bottom py-2">
                                                        <div>
                                                            <div class="fw-semibold text-dark">UPS ground shipping</div>
                                                            <div class="fs-sm text-muted">4 - 6 days</div>
                                                        </div>
                                                        <div>$19.00</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-2">
                                                        <div>
                                                            <div class="fw-semibold text-dark">Local pickup from store</div>
                                                            <div class="fs-sm text-muted">—</div>
                                                        </div>
                                                        <div>$0.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h3 class="accordion-header"><a class="accordion-button collapsed" href="#localStore" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="ci-location text-muted fs-lg align-middle mt-n1 me-2"></i>Find in local store</a></h3>
                                            <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                                                <div class="accordion-body">
                                                    <select class="form-select">
                                                        <option value="">Select your country</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="France">France</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="UK">United Kingdom</option>
                                                        <option value="USA">USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sharing-->
                                    <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="ci-facebook"></i>Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Product description-->
    <div class="container pt-lg-3 pb-4 pb-sm-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="h3 pb-2">Choose your style</h2>
                Description
                <!-- Display product description dynamically -->
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</main>
@endsection
