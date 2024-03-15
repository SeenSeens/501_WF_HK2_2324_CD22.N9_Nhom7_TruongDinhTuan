<?php

namespace App\Livewire\Backend;

use App\Models\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;
    #[validate('required', message: 'Tên sản phẩm không được để trống')]
    public $title;
    public $slug;
    #[Validate('nullable')]
    public $description, $excerpt, $thumbnail, $discount;
    #[validate('required', message: 'Giá sản phẩm không được để trống')]
    public $price;
//    #[validate('required', 'in:true,false', message: 'Invalid trending value')]
    public $new = 'false';
    public $outstanding = 'false';
    public $hot = 'false';
    public $bestseller = 'false';
    public $trending = 'false';
//    #[Validate('nullable')]
//    #[Validate('exists:categories,id', message: 'Invalid parent category.')]
    #[Validate('required')]
    public $category_id;
    public $type_id;
    public $trademark_id;

    protected $listeners = [
        'categorySelected' => 'handleCategorySelected',
        'typeSelected' => 'handleTypeSelected',
        'trademarkSelected' => 'handleTrademarkSelected'
    ];
    public function handleCategorySelected($categoryId) {
        $this->category_id = $categoryId;
    }
    public function handleTypeSelected($typeId) {
        $this->type_id = $typeId;
    }
    public function handleTrademarkSelected($trademarkId) {
        $this->trademark_id = $trademarkId;
    }
    public function generateSlug() {
        $this->slug = SlugService::createSlug(Product::class, 'slug', $this->title);
    }
    public function render() {
        return view('livewire.backend.create-product')->layout('layouts.admin');
    }

    public function create() {
        $validated = $this->validate();
        if ($this->thumbnail) :
            $validated['thumbnail'] = $this->thumbnail->store('uploads', 'public');
        endif;
        $product = Product::create($validated);
        session()->flash('message', 'Dữ liệu đã được thêm thành công!');
    }
}
