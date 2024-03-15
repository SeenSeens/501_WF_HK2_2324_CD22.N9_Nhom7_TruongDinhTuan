<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class AdminLayout extends Component
{
    public function render()
    {
        return view('livewire.backend.admin-layout')->layout('layouts.admin');
    }
}
