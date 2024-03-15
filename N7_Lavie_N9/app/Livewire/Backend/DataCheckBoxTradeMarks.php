<?php

namespace App\Livewire\Backend;

use App\Models\Trademark;
use Livewire\Component;

class DataCheckBoxTradeMarks extends Component {
    public $trademark_id;
    public function render() {
        $trademarks = Trademark::all();
        return view('livewire.backend.data-check-box-trade-marks', compact('trademarks'));
    }
    public function updatedTrademarkId(){
        $this->dispatch('trademarkSelected', $this->trademark_id);
    }
}
