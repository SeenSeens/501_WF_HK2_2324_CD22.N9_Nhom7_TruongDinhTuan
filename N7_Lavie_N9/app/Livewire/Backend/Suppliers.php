<?php

namespace App\Livewire\Backend;

use App\Models\Supplier;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Suppliers extends Component {
    #[Url()]
    public $perPage = 5;
    #[Url(history:true)]
    public $search = '';
    #[Validate('required', message:'Tên nhà cung cấp không được để trống')]
    public $name;
    public $slug;
    #[Validate('nullable')]
    public $description;
    #[Validate('nullable')]
    public $thumbnail;
    public $editID;
    public $editName;
    public function render() {
        return view('livewire.backend.suppliers', [
            'suppliers' => Supplier::search($this->search)->paginate(),
        ])->layout('layouts.admin');
    }

    function create() {
        $validated = $this->validate();
        Supplier::create($validated);
        session()->flash('success', 'Dữ liệu đã được thêm thành công!');
        $this->reset(['name']);
    }

    function edit($id) {
        $this->editID = $id;
        $this->editName = Supplier::find($id)->name;
    }

    function update() {
        $this->validateOnly('editName');
        Supplier::find( $this->editID)->update([
            'name' => $this->editName
        ]);
        session()->flash('update', 'Dữ liệu đã được cập nh thành công!');
        $this->cancel();
    }

    function cancel() {
        $this->reset('editID', 'editName');
    }
    function delete($id) {
        Supplier::find($id)->delete();
    }
}
