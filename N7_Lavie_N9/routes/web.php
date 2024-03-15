<?php

use App\Http\Controllers\ProductController;
use App\Livewire\Backend\AdminLayout;
use App\Livewire\Backend\AllPages;
use App\Livewire\Backend\AllPosts;
use App\Livewire\Backend\Categories;
use App\Livewire\Backend\CategoryPosts;
use App\Livewire\Backend\CreatePages;
use App\Livewire\Backend\CreatePosts;
use App\Livewire\Backend\CreateProduct;
use App\Livewire\Backend\OrderList;
use App\Livewire\Backend\Producers;
use App\Livewire\Backend\Product;
use App\Livewire\Backend\ProductList;
use App\Livewire\Backend\ProductsDetails;
use App\Livewire\Backend\Stocks;
use App\Livewire\Backend\Suppliers;
use App\Livewire\Backend\Trademarks;
use App\Livewire\Backend\Types;
use App\Livewire\Cart;
use App\Livewire\ShoppingCart;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('contact', \App\Livewire\Contact::class);
Route::get('about', \App\Livewire\About::class);
Route::get('shop', \App\Livewire\Shop::class);
//Route::get('productdetail/{id}', 'App\Http\Controllers\ProductController@getchitietsanpham')->name('product.detail');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/cart', ShoppingCart::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard', AdminLayout::class);
    Route::get('chuyen-muc', Categories::class)->name('Chuyên mục');
    Route::get('the-loai', Types::class);
    Route::get('kho-hang', Stocks::class);
    Route::get('nha-cung-cap', Suppliers::class);
    Route::get('thuong-hieu', Trademarks::class);
    Route::get('nha-san-xuat', Producers::class);
    Route::get('all-posts', AllPosts::class);
    Route::get('create-post', CreatePosts::class);
    Route::get('posts-cat', CategoryPosts::class);
    Route::get('all-pages', AllPages::class);
    Route::get('create-page', CreatePages::class);
    Route::get('product', Product::class);
//    Route::get('product/{productId}', ProductsDetails::class);
    Route::get('create-product',CreateProduct::class);
    Route::get('order-list', OrderList::class);
    Route::get('product-list', ProductList::class);
});
