{{--
<div class="card scroll-list">
    <div class="card-header fw-bold">Thương hiệu</div>
    <div class="card-body">
        @foreach($trademarks as $trademark)
            <div class="form-check scroll-item">
                <input class="form-check-input" type="checkbox" value="{{ $trademark->id }}" id="{{ $trademark->id }}" wire:model="trademark_id">
                <label class="form-check-label" for="{{ $trademark->id }}">
                    {{ $trademark->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
--}}
<div class="card" wire:ignore.self>
    <div class="card-header fw-bold">Thương hiệu</div>
    <div class="card-body">
        <select class="form-select dropdown" wire:model.change="trademark_id">
            <option value="">-- Vui lòng chọn --</option>
            @foreach($trademarks as $trademark)
                <option value="{{ $trademark->id }}">{{ $trademark->name }}</option>
            @endforeach
        </select>
    </div>
</div>
