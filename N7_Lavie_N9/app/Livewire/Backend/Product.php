<?php

namespace App\Livewire\Backend;

use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Product as Products;
use Livewire\WithPagination;

class Product extends Component {
    use WithPagination;
    public $product_id;
    #[Url()]
    public $perPage = 10;
    #[Url(history:true)]
    public $search = '';
    public function render() {
        return view('livewire.backend.product', [
            'products' => Products::search($this->search)->paginate($this->perPage)
        ])->layout('layouts.admin');
    }
    public function showProductDetail($productId){
        $this->product_id = $productId;
        app('productService')->setProductId($productId);
        // Gửi sự kiện tới component khác nếu cần
        $this->emitUp('loadProduct', $productId);
    }
}
