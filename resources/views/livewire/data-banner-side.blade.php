<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3 pl-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-left">
                            <h4 class="text-white text-capitalize ps-3">BANNER</h4>
                        </div>
                        <div class="col-6 text-end" style="padding-right: 2rem">
                            @if($isTambah == false && $isEdit == false )
                            <button class="btn bg-gradient-dark mb-0" wire:click='klikTambah()'><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Banner</button>
                            @elseif($isTambah == false && $isEdit == true )
                            <button type="button" class="btn bg-gradient-dark mb-0" wire:click='klikTambah()'
                                disabled><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Banner</button>
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
                        <input wire:model="gambar_bannerside" type="file" class="form-control" id="gambar_bannerside"
                            aria-describedby="basic-addon3" placeholder="">
                        @error('gambar_bannerside') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="input-group input-group-dynamic mb-1">
                        <input wire:model="keterangan_bannerside" type="text" class="form-control" id="keterangan_bannerside"
                            aria-describedby="basic-addon3" placeholder="Masukkan keterangan banner disini...">
                        @error('keterangan_bannerside') <span class="text-danger">{{ $message }}</span>@enderror
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
                        <input wire:model="gambar_bannerside" type="file" class="form-control"
                            aria-describedby="basic-addon3" placeholder="">
                        @error('gambar_bannerside') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="input-group input-group-dynamic mb-1">
                        <input wire:model="keterangan_bannerside" type="text" class="form-control"
                            aria-describedby="basic-addon3" placeholder="Masukkan keterangan gambar disini...">
                        @error('keterangan_bannerside') <span class="text-danger">{{ $message }}</span>@enderror
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
                    <div class="col-md-3 d-flex align-items-center mb-2" style="margin-left: 1rem;margin-right: 2rem">
                        <div class="input-group input-group-outline" style="margin-right: 2rem">
                            <label class="form-label"></label>
                            <input wire:model.debounce.500ms="search" id="cari" type="text" class="form-control"
                                onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Ketik nama user...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Gambar
                                        </th>
                                        <th style="width:20%" class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Keterangan</th>
                                        <th
                                            class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Updated At</th>
                                        <th
                                            class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($bannersides as $bannerside)
                                    <tr >
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-left px-2">
                                                    <img class="mb-0"
                                                        src="{{ Storage::url($bannerside->gambar_bannerside) }}"
                                                        alt="kolaka update" sizes="" srcset="" width="200px">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="flex-column align-middle"style="width:20%">
                                            <p style="width:20%" style="word-break: break-word" class="text-xs font-weight-bold mb-0 w-25 text-break">
                                                {{ $bannerside->keterangan_bannerside }}
                                            </p>
                                        </td>

                                        <td class="align-middle text-left  text-sm">
                                            @if($bannerside->status_bannerside == 1)
                                            <button wire:click="update_status_off({{ $bannerside->id }})" class="btn btn-sm btn-success font-weight-bold text-xs mb-0">Aktif</button>
                                            @else
                                            <button wire:click="update_status_on({{ $bannerside->id }})" class="btn btn-sm btn-danger font-weight-bold text-xs mb-0">Nonaktif</button>
                                            @endif
                                        </td>
                                        <td class="align-middle text-left">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $bannerside->updated_at }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <button wire:click="edit({{ $bannerside->id }})"
                                                class="btn btn-sm btn-info font-weight-bold text-xs mb-0">
                                                Edit
                                            </button>
                                            <button wire:click="delete({{ $bannerside->id }})"
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
                            {{ $bannersides->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
