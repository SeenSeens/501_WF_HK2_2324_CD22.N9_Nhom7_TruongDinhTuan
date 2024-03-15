{{--<div class="card scroll-list">
    <div class="card-header fw-bold">Chuyên mục</div>
    <div class="card-body">
        @foreach($categories as $category)
            <div class="form-check scroll-item">
                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="{{ $category->id }}" wire:model="category_id">
                <label class="form-check-label" for="{{ $category->id }}">
                    {{ $category->name }}
                </label>
                @error('category_id') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
            </div>
        @endforeach
    </div>
</div>--}}
<div class="card" wire:ignore.self>
    <div class="card-header fw-bold">Chuyên mục</div>
    <div class="card-body">
        <select class="form-select dropdown" wire:model.change="category_id">
            <option value="">-- Vui lòng chọn --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
    </div>
</div>

