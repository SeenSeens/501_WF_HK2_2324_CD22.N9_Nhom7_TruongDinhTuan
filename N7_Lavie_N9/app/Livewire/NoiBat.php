<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Exceptions\RootTagMissingFromViewException;
class NoiBat extends Component
{
    public function render()
    {
        $products = Product::with('category')->where('outstanding', true)->take(4)->get();
        $categories = Category::all();

        return view('livewire.noi-bat', compact('products', 'categories'));
    }
}
