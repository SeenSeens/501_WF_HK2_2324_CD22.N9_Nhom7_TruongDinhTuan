<div class="col-12">
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-white">Chuyên mục</button>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-chevron-down'></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1" wire:model.change="cat_id">
                @foreach($categories as $category)
                    <li class="dropdown-item" id="{{ $category->id }}">{{ $category->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
