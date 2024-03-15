<?php

namespace App\Livewire;

use Livewire\Component;
//use Darryldecode\Cart\Cart;
class Cart extends Component {
    public $productId;
    public $productName;
    public $price;
    public $quantity = 1;
    public function render() {
        $cartItems = Cart::content();
        return view('livewire.cart', [
            'cartItems' => Cart::content()
        ])->layout('layouts.app');
    }
}
