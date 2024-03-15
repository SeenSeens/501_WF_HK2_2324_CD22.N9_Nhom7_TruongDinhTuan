<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text"><a href="dashboard" wire:navigate>Rukada</a></h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-pin"></i>
                </div>
                <div class="menu-title">Bài viết</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/all-posts') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Tất cả bài viết</a> </li>
                <li> <a href="{{ url('admin/create-post') }}" wire:navigate><i class="fadeIn animated bx bx-pencil"></i>Thêm bài viết</a> </li>
                <li> <a href="{{ url('admin/posts-cat') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Chuyên mục</a> </li>
            </ul>
        </li>
        {{--<li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-image"></i>
                </div>
                <div class="menu-title">Media</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/media') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Thư viện</a> </li>
                <li> <a href="{{ url('admin/media-new') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Add New Media File</a> </li>
            </ul>
        </li>--}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-book"></i>
                </div>
                <div class="menu-title">Trang</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/all-pages') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Tất cả các trang</a> </li>
                <li> <a href="{{ url('admin/create-page') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Thêm trang mới</a> </li>
            </ul>
        </li>
{{--        <li>--}}
{{--            <a href="javascript:;" class="has-arrow">--}}
{{--                <div class="parent-icon"><i class="fadeIn animated bx bx-comment-detail"></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Phản hồi</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="{{ url('admin/page') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Tất cả các trang</a> </li>--}}
{{--                <li> <a href="{{ url('admin/add-new-page') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Thêm trang mới</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-archive"></i>
                </div>
                <div class="menu-title">Sản phẩm</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/product') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Tất cả sản phẩm</a> </li>
                <li> <a href="{{ url('admin/product-list') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Danh sách sản phẩm</a> </li>
                <li> <a href="{{ url('admin/create-product') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Thêm mới</a> </li>
                <li> <a href="{{ url('admin/chuyen-muc') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Chuyên mục</a> </li>
                <li> <a href="{{ url('admin/the-loai') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Thể loại</a> </li>
{{--                <li> <a href="{{ url('admin/kho-hang') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Kho hàng</a> </li>--}}
{{--                <li> <a href="{{ url('admin/nha-cung-cap') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Nhà cung cấp</a> </li>--}}
                <li> <a href="{{ url('admin/thuong-hieu') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Thương hiệu</a> </li>
{{--                <li> <a href="{{ url('admin/nha-san-xuat') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Nhà sản xuất</a> </li>--}}
            </ul>
        </li>
        {{--<li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-wordpress-filled"></i>
                </div>
                <div class="menu-title">E-Commerce</div>
            </a>
            <ul>
                <li> <a href="{{ url('admin/order-list') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Đơn hàng</a> </li>
                <li> <a href="{{ url('admin/report') }}" wire:navigate><i class="bx bx-right-arrow-alt"></i>Báo cáo</a> </li>
            </ul>
        </li>--}}
    </ul>
    <!--end navigation-->
</div>
