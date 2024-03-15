<?php

namespace App\Livewire\Backend;

use App\Models\Trademark;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Trademarks extends Component {
    use WithFileUploads, WithPagination;
    #[Url()]
    public $perPage = 5;
    #[Url(history:true)]
    public $search = '';
    #[Validate('required', message:'Tên thương hiệu không được để trống')]
    public $name;
    #[Validate('nullable')]
    public $slug, $description;
    #[Validate('nullable')]
    public $editID, $editName, $editSlug, $editDescription;
    public function generateSlug() {
        $this->slug = SlugService::createSlug(Trademark::class, 'slug', $this->name );
    }
    public function render() {
        $trademarks = Trademark::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.trademarks', compact('trademarks'))->layout('layouts.admin');
    }

    function create() {
        $validated = $this->validate();
        Trademark::create($validated);
        session()->flash('success', 'Dữ liệu đã được thêm thành công!');
        $this->reset(['name']);
    }

    function edit($id) {
        $this->editID = $id;
        $trademark = Trademark::find($id);
        $this->editName = $trademark->name;
        $this->editSlug = $trademark->slug;
        $this->editDescription = $trademark->description;
//        $this->editThumbnail = $trademark->thumbnail;
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
            if ($oldThumbnailPath = Trademark::find($this->editID)->thumbnail) {
                // Xóa hình thu nhỏ cũ (nếu có)
                Storage::disk('public')->delete($oldThumbnailPath);
            }
        } else {
            // Không có hình thu nhỏ mới nào được cung cấp, hãy sử dụng hình thu nhỏ hiện có
            $validated['editThumbnail'] = Trademark::find($this->editID)->thumbnail;
        }*/

        Trademark::find($this->editID)->update($validated);

        // Reset edit variables
        $this->cancel();
    }
    function cancel() {
        $this->reset('editID', 'editName', 'editDescription');
    }

    function delete($id) {
        Trademark::find($id)->delete();
    }
}
