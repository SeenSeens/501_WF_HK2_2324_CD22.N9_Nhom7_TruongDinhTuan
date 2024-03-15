<div class="card scroll-list">
    <div class="card-header fw-bold">Nhà sản xuất</div>
    <div class="card-body">
        @foreach($producers as $producer)
            <div class="form-check scroll-item">
                <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="{{ $producer->id }}" wire:model.live="producer_id">
                <label class="form-check-label" for="{{ $producer->id }}">
                    {{ $producer->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
