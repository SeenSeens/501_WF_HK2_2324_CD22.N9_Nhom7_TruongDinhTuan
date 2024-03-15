<?php

namespace App\Livewire\Backend;

use App\Models\Category;
use Livewire\Component;

class FilterCategory extends Component
{
    public $cat_id;
    public function render()
    {
        return view('livewire.backend.filter-category', [
            'categories' => Category::all()
        ]);
    }
}
