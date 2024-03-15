{{--<div class="card scroll-list">
    <div class="card-header fw-bold">Thể loại</div>
    <div class="card-body">
        @foreach($types as $type)
            <div class="form-check scroll-item">
                <input class="form-check-input" type="checkbox" value="{{ $type->id }}" id="{{ $type->id }}" wire:model="types_id">
                <label class="form-check-label" for="{{ $type->id }}">
                    {{ $type->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>--}}
<div class="card" wire:ignore.self>
    <div class="card-header fw-bold">Thể loại</div>
    <div class="card-body">
        <select class="form-select dropdown" wire:model.change="type_id">
            <option value="">-- Vui lòng chọn --</option>
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
    </div>
</div>
