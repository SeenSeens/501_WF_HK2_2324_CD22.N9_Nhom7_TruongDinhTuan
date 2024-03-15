<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Darryldecode\Cart\Cart;
class NewProducts extends Component  {
//    public $productId;
//    public $productTitle;
//    public $price;
//    public $quantity = 1;
    public function render(){
        $products = Product::with('category')->latest()->take(4)->get();
        $categories = Category::all();
        return view('livewire.new-products', compact('products', 'categories'));
    }
    public function addToCart($productId, $productTitle, $price, $quantity) {
        $userID = Auth::id(); // Get the authenticated user's ID
        \Cart::session($userID)->add( [
            'id' => $productId, // Change $rowId to $productId
            'name' => $productTitle, // Correct variable name
            'price' => $price, // Correct variable name
            'quantity' => $quantity,
            'attributes' => [],
            'associatedModel' => Product::class
        ]);
        $this->dispatch('update');
    }
}
