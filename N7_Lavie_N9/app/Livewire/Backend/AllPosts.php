<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class AllPosts extends Component
{
    public function render()
    {
        return view('livewire.backend.all-posts')->layout('layouts.admin');
    }
}
