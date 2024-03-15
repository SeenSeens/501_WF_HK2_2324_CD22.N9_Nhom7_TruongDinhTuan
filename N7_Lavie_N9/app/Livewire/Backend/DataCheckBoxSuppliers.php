<?php

namespace App\Livewire\Backend;

use App\Models\Supplier;
use Livewire\Component;

class DataCheckBoxSuppliers extends Component
{
    public function render()
    {
        $suppliers = Supplier::all();
        return view('livewire.backend.data-check-box-suppliers', compact('suppliers'));
    }
}
