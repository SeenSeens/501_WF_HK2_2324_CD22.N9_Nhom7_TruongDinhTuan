<?php

namespace App\Livewire\Backend;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class DataCheckBoxCategories extends Component {
    public $category_id;
    public function render() {
        $categories = Category::all();
        return view('livewire.backend.data-check-box-categories', compact('categories'));
    }
    public function updatedCategoryId(){
        $this->dispatch('categorySelected', $this->category_id);
    }

}
