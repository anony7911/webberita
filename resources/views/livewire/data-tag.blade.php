<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3 pl-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-left">
                            <h4 class="text-white text-capitalize ps-3">TAGS</h4>
                        </div>
                        <div class="col-6 text-end" style="padding-right: 2rem">
                            @if($isTambah == false && $isEdit == false )
                            <button class="btn bg-gradient-dark mb-0" wire:click='klikTambah()'><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Tag</button>
                            @elseif($isTambah == false && $isEdit == true )
                            <button type="button" class="btn bg-gradient-dark mb-0" wire:click='klikTambah()'
                                disabled><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Tag</button>
                            @else
                            <button class="btn bg-gradient-secondary mb-0" wire:click='batalTambah()'>Cancel</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                @if (session()->has('message'))
                <div class="row py-4 px-4 pt-0 pb-0 mb-0">
                    <div class="alert alert-success alert-dismissible fade show opacity-5" role="alert">
                        <span class="alert-icon align-middle">
                            <span class="material-icons text-md text-white opacity-10">
                                thumb_up_off_alt
                            </span>
                        </span>
                        <span class="alert-text text-white opacity-10"><strong>{{ session('message') }}</strong></span>
                        <button type="button" class="btn-close text-white opacity-10" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                @if($isTambah == TRUE && $isEdit == FALSE)
                <form id="isTambah" class="py-4 px-4 pt-0">
                    @csrf
                    <div class="input-group input-group-dynamic mb-1">
                        <input wire:model="nama_tag" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" placeholder="nama tag">
                        @error('nama_tag') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="input-group input-group-dynamic mb-1">
                        <input wire:model="slug_tag" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" placeholder="nama-tag">
                        @error('slug_tag') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-1">
                        <button type="submit" class="btn btn-sm bg-gradient-success mb-2 mt-2"
                            wire:click.prevent="store()">Simpan</button>
                        <button class="btn btn-sm bg-gradient-secondary mb-2 mt-2"
                            style="margin-left: 3px;border-top-left-radius: 7px;border-bottom-left-radius:7px"
                            wire:click='batalTambah()'>Cancel</button>
                    </div>
                </form>
                @elseif($isTambah == FALSE && $isEdit == TRUE)
                <form id="isEdit" class="py-4 px-4 pt-0">
                    @csrf
                    <div class="input-group input-group-dynamic mb-1">
                        <input wire:model="nama_tag" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" placeholder="nama tag">
                        @error('nama_tag') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="input-group input-group-dynamic mb-1">
                        <input wire:model="slug_tag" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" placeholder="nama-tag">
                        @error('slug_tag') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-1">
                        <button type="submit" class="btn btn-sm bg-gradient-primary mb-2 mt-2"
                            wire:click.prevent="update()">Update</button>
                        <button class="btn btn-sm bg-gradient-secondary mb-2 mt-2"
                            style="margin-left: 3px;border-top-left-radius: 7px;border-bottom-left-radius:7px"
                            wire:click='batalEdit()'>Cancel</button>
                    </div>
                </form>
                @endif
                <div class="row" id="navbar">
                    <div class="col-md-3 d-flex align-items-center mb-2 " style="margin-left: 25px;margin-right: 4rem">
                        <div class="input-group input-group-outline">
                            <label class="form-label"></label>
                            <input wire:model.debounce.500ms="search" id="cari" type="text" class="form-control"
                                onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Ketik nama tag...">
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-2">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Tags
                                </th>
                                <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Slug Tags</th>
                                <th
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Created At</th>
                                <th
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tags as $tag)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-left px-2">
                                            <h6 class="mb-0 text-sm">{{ $tag->nama_tag }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $tag->slug_tag }}</p>
                                </td>
                                <td class="align-middle text-left">
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ $tag->created_at }}</span>
                                </td>
                                <td class="align-middle">
                                    <button wire:click="edit({{ $tag->id }})"
                                        class="btn btn-sm btn-info font-weight-bold text-xs mb-0">
                                        Edit
                                    </button>
                                    <button wire:click="delete({{ $tag->id }})"
                                        class="btn btn-sm btn-danger font-weight-bold text-xs mb-0">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <p class="text-s font-weight-bold mb-0 text-center text-warning">Tidak Ada Data
                                        Ditemukan.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

