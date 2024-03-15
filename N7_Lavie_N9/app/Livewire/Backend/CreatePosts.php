<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class CreatePosts extends Component
{
    public function render()
    {
        return view('livewire.backend.create-posts')->layout('layouts.admin');
    }
}
