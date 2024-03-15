<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.shop', [
            'products' => Product::paginate(12)
        ])->layout('layouts.app');
    }
}
