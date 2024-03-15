<?php

namespace App\Livewire\Backend;

use App\Services\ProductService;
use Livewire\Component;

class ProductsDetails extends Component {
    public $product_id = 1;
    protected $listeners = [
        'loadProduct' => 'loadProduct'
    ];
    public function loadProduct($productID) {
        $this->product_id = $productID;
    }
    /*public function someMethod(ProductService $productService)
    {
        // Thiết lập giá trị productId
        $productService->setProductId($yourProductId);

        // Lấy giá trị productId
        $productId = $productService->getProductId();

        // Sử dụng giá trị productId theo nhu cầu
    }
    public function mount()
    {
        $this->product_id = app('productService')->getProductId();
    }*/

    public function render() {
        return view('livewire.backend.products-details', [
            'productDetail' => \App\Models\Product::find(1)
        ])->layout('layouts.admin');
    }
}
