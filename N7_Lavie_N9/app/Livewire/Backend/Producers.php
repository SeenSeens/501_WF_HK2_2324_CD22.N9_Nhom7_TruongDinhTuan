<?php

namespace App\Livewire\Backend;

use App\Models\Producer;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Producers extends Component {
    #[Validate('required', message: 'Tên nhà sản xuất không được để trống')]
    public $name;
    public $editID;
    public $editName;

    public function render() {
        return view('livewire.backend.producers', [
            'producers' => Producer::all()
        ])->layout('layouts.admin');
    }

    function create() {
        $validated = $this->validate();
        Producer::create($validated);
        session()->flash('success', 'Dữ liệu đã được thêm thành công!');
        $this->reset(['name']);
    }

    function edit($id) {
        $this->editID = $id;
        $this->editName = Producer::find($id)->name;
    }

    function update() {
        $this->validateOnly('editName');
        Producer::find( $this->editID)->update([
            'name' => $this->editName
        ]);
        $this->cancel();
    }

    function cancel() {
        $this->reset('editID', 'editName');
    }

    function delete($id) {
        Producer::find($id)->delete();
    }
}
