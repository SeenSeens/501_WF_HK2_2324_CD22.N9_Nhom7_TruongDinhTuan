<?php

namespace App\Livewire\Backend;

use App\Models\Type;
use Livewire\Component;

class DataCheckBoxTypes extends Component {
    public $type_id;
    public function render() {
        $types = Type::all();
        return view('livewire.backend.data-check-box-types', compact('types'));
    }
    public function updatedTypeId(){
        $this->dispatch('typeSelected', $this->type_id);
    }
}
