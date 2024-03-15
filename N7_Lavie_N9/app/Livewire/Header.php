<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.header' , [
            'categories' => Category::all()
        ]);
    }
}
