<?php

namespace App\Livewire\Backend;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Categories extends Component {
    use WithFileUploads, WithPagination;

    #[Url()]
    public $perPage = 5;
    #[Url(history:true)]
    public $search = '';
    #[Validate('required', message: 'Tên chuyên mục không được để trống')]
    public $name;
    #[Validate('nullable')]
    public $slug, $description;
    #[Validate('nullable')]
    #[Validate('exists:categories,id', message: 'Invalid parent category.')]
    public $parentCategoryId;
    #[Validate('nullable')]
    public $editID, $editName, $editSlug, $editDescription;

    public function generateSlug() {
        $this->slug = SlugService::createSlug(Category::class, 'slug', $this->name);
    }
    public function render() {
        $parentCategories = Category::whereNull('parent_id')->get();
        return view('livewire.backend.categories', [
            'categories' => Category::search($this->search)->paginate($this->perPage)
        ], compact('parentCategories'))->layout('layouts.admin');
    }

    public function create() {
        $validated = $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'nullable',
//            'thumbnail' => 'nullable',
            'parentCategoryId' => 'nullable|exists:categories,id',
        ]);
        /*if ($this->thumbnail) :
            $validated['thumbnail'] = $this->thumbnail->store('uploads', 'public');
        endif;*/

        $category = Category::create($validated);
        session()->flash('message', 'Dữ liệu đã được thêm thành công!');
        $this->reset(['name', 'slug', 'description', 'parentCategoryId']);
    }
    public function edit($id) {
        $this->editID = $id;
        $category = Category::find($id);
        $this->editName = $category->name;
        $this->editSlug = $category->slug;
        $this->editDescription = $category->description;
//        $this->editThumbnail = $category->thumbnail;
    }
    public function update() {
        $validated = $this->validate([
            'editName' => 'required',
            'editSlug' => 'required',
            'editDescription' => 'nullable',
//            'thumbnail' => 'nullable',
//            'editThumbnail' => 'nullable'
        ]);

        /*if ($this->editThumbnail instanceof UploadedFile ) {
            $validated['editThumbnail'] = $this->editThumbnail->store('uploads', 'public');
            if ($oldThumbnailPath = Category::find($this->editID)->thumbnail) {
                // Xóa hình thu nhỏ cũ (nếu có)
                Storage::disk('public')->delete($oldThumbnailPath);
            }
        } else {
            // Không có hình thu nhỏ mới nào được cung cấp, hãy sử dụng hình thu nhỏ hiện có
            $validated['editThumbnail'] = Category::find($this->editID)->thumbnail;
        }*/

        Category::find($this->editID)->update($validated);

        // Reset edit variables
        $this->cancel();
    }
    function cancel() {
        $this->reset('editID', 'editName', 'editDescription');
    }

    public function delete($id) {
        Category::find($id)->delete();
    }
}
