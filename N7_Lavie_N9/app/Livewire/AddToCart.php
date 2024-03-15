<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class AddToCart extends Component {
    public $id, $title, $price, $discount;

//    public function render() {
//        return view('livewire.add-to-cart');
//    }

    public function addProduct($productId) {
        $product = Product::find($productId);

        $this->cart->add($product, 1);

        $this->dispatch('productAdded');
    }
}
