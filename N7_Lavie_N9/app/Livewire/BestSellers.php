<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class BestSellers extends Component
{
    public function render()
    {
        $products = Product::with('category')->where('bestseller', true)->take(4)->get();
        $categories = Category::all();

        return view('livewire.best-sellers', compact('products', 'categories'));
    }
}
