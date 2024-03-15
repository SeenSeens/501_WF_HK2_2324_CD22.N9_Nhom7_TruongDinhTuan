<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.backend.product-list')->layout('layouts.admin');
    }
}
