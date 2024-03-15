<div>
    <div class="card radius-10">
        <div class="card-body p-4">
            <h5 class="card-title">Sản phẩm</h5>
            <hr/>
            <div class="form-body mt-4">
                <form class="row" wire:submit.prevent="create">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <label class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" wire:model="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" rows="30" wire:model="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border border-3 p-4 rounded">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Giá bán</label>
                                    <input type="text" class="form-control" placeholder="Nhập giá bán gốc">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Giá giảm</label>
                                    <input type="text" class="form-control" placeholder="Nhập giá giảm">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Chuyên mục</label>
                                    <select class="form-select">
                                        <option value="">-- Chọn chuyên mục --</option>
                                        @foreach( $categories as $category )
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Thể loại</label>
                                    <select class="form-select">
                                        <option value="">-- Chọn thể loại --</option>
                                        @foreach( $types as $type )
                                            <option value="{{ $type->id }}"> {{ $type->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Kho hàng</label>
                                    <select class="form-select">
                                        <option></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Nhà cung cấp</label>
                                    <select class="form-select">
                                        <option>-- Chọn nhà cung cấp --</option>
                                        @foreach( $suppliers as $supplier )
                                            <option value="{{ $supplier->id }}"> {{ $supplier->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Nhà sản xuất</label>
                                    <select class="form-select">
                                        <option>-- Chon nhà sản xuất --</option>
                                        @foreach( $producers as $producer )
                                            <option value="{{ $producer->id }}"> {{ $producer->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Thương hiệu</label>
                                    <select class="form-select">
                                        <option>-- Chọn thương hiệu --</option>
                                        @foreach( $trademarks as $trademark )
                                            <option value="{{ $trademark->id }}"> {{ $trademark->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ảnh đại diện</label>
                                    <input class="btn" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                </div>
                                <div class="col-12">
                                    <label for="inputProductTags" class="form-label">Product Tags</label>
                                    <input type="text" class="form-control" id="inputProductTags" placeholder="Enter Product Tags">
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Thêm mới sản phẩm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end row-->
            </div>
        </div>
    </div>

    <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Danh sách sản phẩm</h5>
                </div>
                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Nhà cung cấp</th>
                        <th>Nhà sản xuất</th>
                        <th>Thương hiệu</th>
                        <th>Ảnh đại diện</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
