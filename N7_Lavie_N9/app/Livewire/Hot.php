<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Hot extends Component
{
    public function render()
    {
        $products = Product::with('category')->where('hot', true)->take(4)->get();
        $categories = Category::all();

        return view('livewire.hot', compact('products', 'categories'));
    }
}
