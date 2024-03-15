<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-xl-2">
                            <a href="{{ url('admin/create-product') }}" class="btn btn-primary mb-3 mb-lg-0" wire:navigate><i class='bx bxs-plus-square'></i>New Product</a>
                        </div>
                        <div class="col-lg-9 col-xl-10">
                            <form class="float-lg-end">
                                <div class="row row-cols-lg-auto g-2">
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-5" placeholder="Search Product..." wire:model.live.debounce.300ms="search"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                        </div>
                                    </div>
                                    <livewire:backend.filter-category />
                                    <div class="col-12">
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-white">Thể loại</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-chevron-down'></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-white">Thương hiệu</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-chevron-down'></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
        @foreach( $products as $product)
        <div class="col">
            <div class="card">
                <img src="{{ asset('/storage/' . $product->thumbnail ) }}" class="card-img-top" alt="{{ $product->title }}">
                <div class="">
                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                </div>
                <div class="card-body">
                    <h6 class="card-title cursor-pointer"><a href="{{ url('/admin/product/'.$product->slug) }}" wire:click="showProductDetail({{ $product->id }})" wire:navigate>{{ $product->title }}</a></h6>
                    <div class="clearfix">
                        <p class="mb-0 float-start"><strong>134</strong> Sales</p>
                        <p class="mb-0 float-end fw-bold">
                            <span class="me-2 text-decoration-line-through text-secondary">{{ $product->price }}</span>
                            <span>{{ $product->discount }}</span>
                        </p>
                    </div>
                    <div class="d-flex align-items-center mt-3 fs-6">
                        <div class="cursor-pointer">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-secondary'></i>
                        </div>
                        <p class="mb-0 ms-auto">4.2(182)</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div><!--end row-->
    <div class="py-4 px-3">
        <div class="flex ">
            <div class="flex space-x-4 items-center mb-3">
                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                <select wire:model.live='perPage'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
        {{ $products->links() }}
    </div>
{{--    {{ $main }}--}}
</div>
