<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductByCategory extends Component {
    public $categoryId;
    public function mount($categoryId = null) {
        $this->categoryId = $categoryId;
    }
    public function render() {
        /*$categories = Category::all();
        $products = ($this->categoryId)
            ? Product::where('category_id', $this->categoryId)->get()
            : Product::all();
        return view('livewire.product-by-category', compact('products', 'categories'));*/

        return view('livewire.product-by-category', [
            'categories' => Category::all(),
            'selectedCategory' => Category::find($this->categoryId),
            'products' => ($this->categoryId) ? Product::where('category_id', $this->categoryId)->get() : Product::all()
        ]);
    }
}
