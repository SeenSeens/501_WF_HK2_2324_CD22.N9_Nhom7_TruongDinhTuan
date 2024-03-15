<section class="container pt-5">
    @if($products->count() > 0)
    <!-- Heading-->
    <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-3 me-2">Trending products</h2>
        <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="">More products<i class="ci-arrow-right ms-1 me-n1"></i></a></div>
    </div>
    <!-- Grid-->
    <div class="row pt-2 mx-n2">
        @foreach( $products as $product)
                        @if($product->trending === "true")
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                    </div>
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('product.show', $product) }}"><img src="{{ asset('/storage/' . $product->thumbnail ) }}" alt="{{ $product->title }}"></a>
                    <div class="card-body py-2">
{{--                        <a class="product-meta d-block fs-xs pb-1" href="{{ url('/product/'.$product->productDetail->category->slug) }}}">{{ $product->productDetail->category->name  }}</a>--}}
                        <h3 class="product-title fs-sm"><a href="{{ url('/product/'.$product->id) }}">{{ $product->title }}</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price">
                                @if($product->discount > 0)
                                    <span class="text-accent">{{ $product->discount }}</span>
                                    <del class="fs-sm text-muted">{{ $product->price }}</del>
                                @endif
                                @if($product->discount === 0 && $product->price > 0)
                                    <span class="text-accent">{{ $product->price }}</span>
                                @endif
                            </div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
                        @endif
        @endforeach
    </div>
    @endif
</section>

