<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class TrendingProducts extends Component
{
    public function render()
    {
        return view('livewire.trending-products', [
            'products' => Product::all()
        ]);
    }
}
