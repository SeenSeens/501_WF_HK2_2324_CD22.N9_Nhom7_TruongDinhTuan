<div class="container">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-primary">Thêm bài viết mới</h6>
                    <hr>
                    <form method="post" class="row row-cols-1 g-3">
                        <div class="col">
                            <label class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" placeholder="Thêm tiêu đề">
                        </div>
                        <div class="col">
                            <label class="form-label">Nội dung</label>
                            <textarea class="mytextarea" name="content" rows="30">Hello, World!</textarea>
                        </div>
                        <div class="col">
                            <label class="form-label">Mô tả ngắn</label>
                            <textarea class="mytextarea" name="excerpt">Hello, World!</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Đăng
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary px-5">Đăng</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Chuyên mục
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Ảnh đại diện
                </div>
                <div class="card-body">
                    <form>
                        <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@assets
<script src="https://cdn.tiny.cloud/1/1qa5t0dn0b46dukvifb2b500e7ausw3qelzj0jie038xyejf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endassets
@script
<script>
    tinymce.init({
        selector: '.mytextarea',
    });
</script>
@endscript
