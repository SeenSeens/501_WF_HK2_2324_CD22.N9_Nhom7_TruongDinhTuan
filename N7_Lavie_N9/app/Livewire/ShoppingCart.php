<?php

namespace App\Livewire;

use Livewire\Component;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCollection;
class ShoppingCart extends Component
{
    public function render()
    {
        $cartItems = \Cart::getContent();
        return view('livewire.shopping-cart', [
            'cartItems' => \Cart::getContent()
        ])->layout('layouts.app');
    }
}
