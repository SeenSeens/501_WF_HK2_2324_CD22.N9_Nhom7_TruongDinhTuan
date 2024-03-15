<?php

namespace App\Livewire\Backend;

use App\Models\Producer;
use Livewire\Component;

class DataCheckBoxProducers extends Component
{
    public $producer_id;
    public function render()
    {
        $producers = Producer::all();
        return view('livewire.backend.data-check-box-producers', compact('producers'));
    }
    public function updatedProducerId(){
        $this->dispatch('producerSelected', $this->producer_id);
    }
}
