<div class="page-content" xmlns:livewire="http://www.w3.org/1999/html">
    <form method="post" class="row" wire:submit.prevent="create" enctype="multipart/form-data">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-primary">Thêm sản phẩm mới</h6>
                    <hr>
                    <div class="row row-cols-1 g-3">
                        <div class="col">
                            <label class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Thêm tiêu đề" wire:model="title" wire:keyup="generateSlug" autofocus>
                            @error('title') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="col">
                            <label>Đường dẫn</label>
                            <input type="text" class="form-control" placeholder="Đường dẫn" wire:model="slug" readonly>
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col" wire:ignore>
                            <label class="form-label">Nội dung</label>
                            <textarea class="mytextarea" rows="30" wire:model="description" >Hello, World!</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col" wire:ignore>
                            <label class="form-label">Mô tả ngắn</label>
                            <textarea class="mytextarea" wire:model="excerpt">Hello, World!</textarea>
                            @error('excerpt') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 accordion accordion-flush">
            {{--<div class="card accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Đăng
                        </button>
                    </div>
                    <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <button type="submit" class="btn btn-primary px-5">Đăng</button>
                        </div>
                    </div>
            </div>--}}
            <div class="card">
                <div class="card-header">Đăng</div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary px-5">Đăng</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Giá sản phẩm</div>
                <div class="card-body">
                    <input type="text" wire:model="price" class="form-control mb-3" placeholder="Giá gốc">
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    <input type="text" wire:model="discount" class="form-control" placeholder="Giá khuyến mãi">

                </div>
            </div>
            <livewire:backend.data-check-box-categories />
            {{--<script>
                document.addEventListener('livewire:load', function () {
                    Livewire.on('categorySelected', function (categoryId) {
                        @this.set('category_id', categoryId);
                    });
                });
            </script>--}}
            <livewire:backend.data-check-box-types />
            <livewire:backend.data-check-box-trade-marks />
{{--            <livewire:data-check-box-suppliers />--}}
{{--            <livewire:data-check-box-producers />--}}
            <div class="card">
                <div class="card-header fw-bold">Sản phẩm mới</div>
                <div class="card-body">
                    <select class="form-select" wire:model.change="new">
                        <option value="">-- Vui lòng chọn --</option>
                        <option value="true">true</option>
                        <option value="false">false</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header fw-bold">Sản phẩm nổi bật</div>
                <div class="card-body">
                    <select class="form-select" wire:model.change="outstanding">
                        <option value="">-- Vui lòng chọn --</option>
                        <option value="true">true</option>
                        <option value="false">false</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header fw-bold">Sản phẩm trending</div>
                <div class="card-body">
                    <select class="form-select" wire:model.change="trending">
                        <option value="">-- Vui lòng chọn --</option>
                        <option value="false">false</option>
                        <option value="true">true</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header fw-bold">Sản phẩm hot</div>
                <div class="card-body">
                    <select class="form-select" wire:model.change="hot">
                        <option value="">-- Vui lòng chọn --</option>
                        <option value="true">true</option>
                        <option value="false">false</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header fw-bold">Sản phẩm bestseller</div>
                <div class="card-body">
                    <select class="form-select" wire:model.change="bestseller">
                        <option value="">-- Vui lòng chọn --</option>
                        <option value="true">true</option>
                        <option value="false">false</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong>Ảnh đại diện</strong>
                </div>
                <div class="card-body">
                    <form>
                        <input wire:model="thumbnail" type="file" accept="image/* ">
                        @if($thumbnail)
                            <img class="img-fluid" src="{{ $thumbnail->temporaryUrl() }}" alt="">
                        @endif
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header fw-bold">Album hình ảnh sản phẩm</div>
                <div class="card-body">
                    <form>
                        <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple="" style="display: none;"><div class="imageuploadify well"><div class="imageuploadify-overlay"><i class="fa fa-picture-o"></i></div><div class="imageuploadify-images-list text-center"><i class="bx bxs-cloud-upload"></i><span class="imageuploadify-message">Drag&amp;Drop Your File(s)Here To Upload</span><button type="button" class="btn btn-default" style="background: white; color: rgb(58, 160, 255);">or select file to upload</button></div></div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header fw-bold">Từ khóa sản phẩm</div>
                <div class="card-body">
                    <textarea class="form-textarea"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
@assets
<!--plugins-->
<link href="{{ asset('backend/assets/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
<!-- loader-->
<link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />
<script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
<!-- Bootstrap CSS -->
<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/dark-theme.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/assets/css/semi-dark.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/assets/css/header-colors.css') }}" />
<!-- Bootstrap JS -->
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/1qa5t0dn0b46dukvifb2b500e7ausw3qelzj0jie038xyejf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

@endassets
@script
<script>
    tinymce.init({
        selector: '.mytextarea',
        plugins: 'image',
        toolbar: 'image',
        images_file_types: 'jpg,svg,webp',
        file_picker_types: 'file image media',
        file_picker_callback: (cb, value, meta) => {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];

                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    /*
                      Note: Now we need to register the blob in TinyMCEs image blob
                      registry. In the next release this part hopefully won't be
                      necessary, as we are looking to handle it internally.
                    */
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), { title: file.name });
                });
                reader.readAsDataURL(file);
            });

            input.click();
        },
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
</script>
<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
</script>
<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>
@endscript

