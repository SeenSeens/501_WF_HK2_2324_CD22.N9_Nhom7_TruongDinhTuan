<?php

namespace App\Livewire\Backend;

use App\Models\Category;
use App\Models\Producer;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Trademark;
use App\Models\Type;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Products extends Component {
    #[Validate('required', message: 'Tên sản phẩm không được để trống')]
    public $title;
    public $description;
    public function render(){
        return view('livewire.backend.products', [
            'categories' => Category::all(),
            'types' => Type::all(),
            'suppliers' => Supplier::all(),
            'producers' => Producer::all(),
            'trademarks' => Trademark::all(),
        ])->layout('layouts.admin');
    }
    public function create() {
        $validated = $this->validate();
        Product::create($validated);
        session()->flash('success', 'Dữ liệu đã được thêm thành công!');
        $this->reset(['title', 'description']);
    }

}
