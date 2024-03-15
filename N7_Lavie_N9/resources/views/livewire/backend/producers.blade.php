<div class="page-content">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-primary">Nhà sản xuất</h6>
                    <hr>
                    <form
                        class="row row-cols-1 g-3"
                        @if($editID)
                            wire:submit.prevent="update"
                        @else
                            wire:submit.prevent="create"
                        @endif
                        enctype="multipart/form-data"
                    >
                        <div class="col">
                            <label>Tên nhà sản xuất</label>
                            @if($editID)
                                <input type="text" class="form-control" placeholder="Nhập nhà sản xuất" wire:model="editName" wire:keyup="generateSlug">
                            @else
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Tên nhà sản xuất" wire:model="name" wire:keyup="generateSlug" autofocus>
                                @error('name') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                            @endif
                        </div>
                        <div class="col">
                            <label>Đường dẫn</label>
                            @if($editID)
                                <input type="text" class="form-control" placeholder="Đường dẫn" wire:model="editSlug" readonly>
                            @else
                                <input type="text" class="form-control" placeholder="Đường dẫn" wire:model="slug" readonly>
                            @endif
                        </div>
                        <div class="col">
                            <label>Mô tả</label>
                            @if($editID)
                                <textarea class="form-control" rows="10" placeholder="Mô tả nhà sản xuất" wire:model="editDescription"></textarea>
                            @else
                                <textarea class="form-control" rows="10" placeholder="Mô tả nhà sản xuất" wire:model="description"></textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>
                        {{--<div class="col">
                            <label for="image" class="form-label">Ảnh đại diện nhà sản xuất</label>
                            @if($editID)
                                <input type="file" accept="image/png, image/jpg" wire:model="editThumbnail">
                                @error('editThumbnail') <span class="text-danger">{{ $message }}</span> @enderror
                                @if($editThumbnail)
                                    <img class="img-fluid" src="{{ asset('storage/' . $editThumbnail) }}" alt="">
                                @else
                                    <img class="img-fluid" src="{{ $thumbnail->temporaryUrl() }}" alt="">
                                @endif
                            @else
                                <input type="file" accept="image/png, image/jpg" wire:model="thumbnail">
                                @error('thumbnail') <span class="text-danger">{{ $message }}</span> @enderror
                                @if($thumbnail)
                                    <img class="img-fluid" src="{{ $thumbnail->temporaryUrl() }}" alt="">
                                @endif
                            @endif
                        </div>--}}
                        <div class="col">
                            @if($editID)
                                <button type="submit" class="btn btn-success px-3 radius-30">Sửa</button>
                                <button class="btn btn-danger px-3 radius-30" wire:click="cancel">Hủy</button>
                            @else
                                <button type="submit" class="btn btn-primary px-3 radius-30">Save</button>
                            @endif
                            @if(session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <h6 class="mb-0 text-uppercase">Nhà sản xuất</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-6">
                            <select wire:model.live='perPage'
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/12 p-2.5 ">
                                <option value="5">5</option>
                                <option value="7">7</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="search" class="form-control" wire:model.live.debounce.300ms="search" placeholder="Search">
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Đường dẫn</th>
                            <th>Ảnh đại diện</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($producers as $producer)
                            <tr wire:key="{{ $producer->id }}">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $producer->name ?? 'N/A' }}</td>
                                <td>{{ $producer->description }}</td>
                                <td>{{ $producer->slug }}</td>
                                <td><img src="{{ asset('/storage/' . $producer->thumbnail ) }}" class="img-fluid"></td>
                                <td>
                                    <button class="btn btn-sm btn-light radius-30 text-warning" wire:click="edit({{ $producer->id }})"><i class="bx bxs-edit"></i></button>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-light radius-30 text-danger" wire:click="delete({{ $producer->id }})" wire:confirm="Bạn chắc chắn muốn xóa"><i class="bx bxs-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 col-md-5"></div>
{{--                        <div class="col-sm-12 col-md-7">{{ $types->links() }}</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
