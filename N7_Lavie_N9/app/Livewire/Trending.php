<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Trending extends Component
{
    public function render()
    {
        $products = Product::with('category')->where('trending', true)->take(8)->get();
        $categories = Category::all();

        return view('livewire.trending', compact('products', 'categories'));
    }
    // Một phương thức để chuyển ID sản phẩm đến component ProductDetail
    public function showProductDetail($productId)
    {
        // Phát sự kiện 'productId' với ID sản phẩm được chọn
        $this->dispatch('productId', $productId);
    }
}

