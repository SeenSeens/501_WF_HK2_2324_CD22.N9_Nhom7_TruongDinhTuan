<?php

namespace App\Livewire\Backend;

use App\Models\Menu;
use Livewire\Component;

class Menus extends Component
{
    public function render()
    {
        return view('livewire.backend.menus', [
            'menus' => Menu::all()
        ]);
    }
}
