<div class="card scroll-list">
    <div class="card-header fw-bold">Nhà cung cấp</div>
    <div class="card-body">
        @foreach($suppliers as $supplier)
            <div class="form-check scroll-item">
                <input class="form-check-input" type="checkbox" value="{{ $supplier->id }}" id="{{ $supplier->id }}" wire:model="supplier_id">
                <label class="form-check-label" for="{{ $supplier->id }}">
                    {{ $supplier->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
