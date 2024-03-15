<?php

namespace App\Livewire\Backend;

use App\Models\Stock;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Stocks extends Component
{
    use WithPagination;
    #[Url()]
    public $perPage = 5;
    #[Url(history:true)]
    public $search = '';
    #[Validate('required', message:'Tên kho hàng không được để trống')]
    public $name;
    public $editID;
    public $editName;

    public function render()
    {
        return view('livewire.backend.stocks', [
            'stocks' => Stock::search($this->search)->paginate($this->perPage)
        ] )->layout('layouts.admin');
    }
    function create() {
        $validated = $this->validate([]);
        Stock::create();
        session()->flash('success', 'Dữ liệu đã được thêm thành công!');
        $this->reset(['name']);
    }

    function edit($id) {
        $this->editID = $id;
        $this->editName = Stock::find($id)->name;
    }

    function update() {
        $this->validateOnly('editName');
        Stock::find( $this->editID)->update([
            'name' => $this->editName
        ]);
        $this->cancel();
    }

    function cancel() {
        $this->reset('editID', 'editName');
    }

    function delete($id) {
        Stock::find($id)->delete();
    }
}
