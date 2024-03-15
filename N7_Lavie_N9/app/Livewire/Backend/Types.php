<?php

namespace App\Livewire\Backend;

use App\Models\Category;
use App\Models\Type;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Types extends Component {
    use WithFileUploads, WithPagination;
    #[Url()]
    public $perPage = 5;
    #[Url(history:true)]
    public $search = '';
    #[Validate('required', message: 'Tên thể loại không được để trống')]
    public $name;
    #[Validate('nullable')]
    public $slug, $description;
//    #[Validate('required', message: 'Chọn chuyên mục')]
//    public array $catID = [];
    #[Validate('nullable')]
    public $editID, $editName, $editSlug, $editDescription;
    public function generateSlug() {
        $this->slug = SlugService::createSlug(Type::class, 'slug', $this->name);
    }
    public function render() {
        return view('livewire.backend.types', [
            'types' => Type::search( $this->search )->paginate( $this->perPage ),
//            'categories' => Category::all(),
        ])->layout('layouts.admin');
    }

    public function create() {
        $validated = $this->validate();
        Type::create($validated);
        // Đính kèm các danh mục đã chọn vào loại
//        Type::class->categories()->attach($validated['catID']);
        session()->flash('success', 'Dữ liệu đã được thêm thành công!');
        $this->reset(['name']);
    }
    public function edit($id) {
        $this->editID = $id;
        $type = Type::find($id);
        $this->editName = $type->name;
        $this->editSlug = $type->slug;
        $this->editDescription = $type->description;
//        $this->editThumbnail = $type->thumbnail;
//        $this->editCatID = $type->cat_id;
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
            if ($oldThumbnailPath = Type::find($this->editID)->thumbnail) {
                // Xóa hình thu nhỏ cũ (nếu có)
                Storage::disk('public')->delete($oldThumbnailPath);
            }
        } else {
            // Không có hình thu nhỏ mới nào được cung cấp, hãy sử dụng hình thu nhỏ hiện có
            $validated['editThumbnail'] = Type::find($this->editID)->thumbnail;
        }*/

        Type::find($this->editID)->update($validated);

        // Reset edit variables
        $this->cancel();
    }

    function cancel() {
        $this->reset('editID', 'editName', 'editDescription');
    }

    public function delete($typeID) {
        Type::find($typeID)->delete();
    }
}
