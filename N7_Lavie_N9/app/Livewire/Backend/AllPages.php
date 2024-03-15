<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class AllPages extends Component
{
    public function render()
    {
        return view('livewire.backend.all-pages')->layout('layouts.admin');
    }
}
