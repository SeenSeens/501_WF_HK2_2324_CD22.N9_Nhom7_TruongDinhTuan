<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class CreatePages extends Component
{
    public function render()
    {
        return view('livewire.backend.create-pages')->layout('layouts.admin');
    }
}
