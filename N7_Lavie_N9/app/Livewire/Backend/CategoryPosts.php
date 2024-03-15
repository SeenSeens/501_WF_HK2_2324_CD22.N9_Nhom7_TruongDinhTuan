<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class CategoryPosts extends Component
{
    public function render()
    {
        return view('livewire.backend.category-posts')->layout('layouts.admin');
    }
}
