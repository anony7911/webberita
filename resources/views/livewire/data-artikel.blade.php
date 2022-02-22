<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3 pl-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-left">
                            <h4 class="text-white text-capitalize ps-3">ARTIKEL</h4>
                        </div>
                        <div class="col-6 text-end" style="padding-right: 2rem">
                            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal"
                                data-bs-target="#modalTambah">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Artikel
                            </button>
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
                        <button type="button" class="btn-close text-white opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                @if (session()->has('error'))
                <div class="row py-4 px-4 pt-0 pb-0 mb-0">
                    <div class="alert alert-danger alert-dismissible fade show opacity-7" role="alert">
                        <span class="alert-icon align-middle">
                            <span class="material-icons text-md text-white opacity-10">
                                thumb_up_off_alt
                            </span>
                        </span>
                        <span class="alert-text text-white opacity-10"><strong>{{ session('error') }}</strong></span>
                        <button type="button" class="btn-close text-white opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                <div class="row" id="navbar">
                    <div class="col-md-3 d-flex align-items-center mb-2 " style="margin-left: 25px;margin-right: 4rem">
                        <div class="input-group input-group-outline">
                            <label class="form-label"></label>
                            <input wire:model.debounce.500ms="search" id="cari" type="text" class="form-control"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                placeholder="Ketik judul artikel...">
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-2 table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                    Gambar
                                </th>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2 w-20">
                                    Judul</th>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Kategori</th>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Tags</th>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Views</th>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Created At</th>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Status</th>
                                <th scope="col"
                                    class="text-left text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($artikels as $artikel)
                            <tr>
                                <td class="w-10">
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-left px-2">
                                            <img class="mb-0"
                                                src="{{ url('/assets/img/artikel/'.$artikel->gambar_artikel) }}"
                                                alt="kolaka update" sizes="" srcset="" width="100px">
                                        </div>
                                    </div>
                                </td>
                                <td class="w-10" class="align-middle text-left w-20" style="width: 10px !important"
                                    width="40px">
                                    <div class="d-flex flex-column justify-content-left px-2">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{Str::limit($artikel->judul, 30)}}</span>
                                    </div>
                                </td>
                                <td class="w-10" class="align-middle text-left">
                                    <div class="d-flex flex-column justify-content-left px-2">
                                        @foreach ($artikel->kategoris as $kategori)
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ $kategori->nama_kategori }}</span>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="w-10" class="align-middle text-left">
                                    @foreach ($artikel->tags as $tag)
                                    <span
                                        class="badge badge-md bg-warning text-white text-xxs">{{ $tag->nama_tag }}</span>
                                    @endforeach
                                </td>
                                <td class="w-10" class="align-middle text-left">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $artikel->views }}</span>
                                </td>
                                <td class="w-10" class="align-middle text-left">
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ $artikel->created_at }}</span>
                                </td>
                                <td class="w-10" class="align-middle text-left">
                                    @if($artikel->is_active == 1)
                                    <span class="badge badge-md bg-gradient-success">Aktif</span>
                                    @else
                                    <span class="badge badge-md bg-gradient-danger">Nonaktif</span>
                                    @endif
                                </td>
                                <td class="w-10" class="align-middle">
                                    {{-- <button type="button" wire:click="edit({{ $artikel->id }})"
                                    class="btn btn-sm btn-info font-weight-bold text-xs mb-0" data-bs-toggle="modal"
                                    data-bs-target="#modalEdit">
                                    Edit
                                    </button> --}}
                                    {{-- <button type="button" wire:click="select({{ $artikel->id }}, 'update')"
                                        class="btn btn-sm btn-info font-weight-bold text-xs mb-0" data-bs-id_artikel="{{ $artikel->id }}">
                                        Edit
                                    </button> --}}
                                    <a href="{{ url('/admin/artikel', $artikel->id) }}" class="btn btn-sm btn-info font-weight-bold text-xs mb-0">Edit</a>
                                    <button wire:click="delete({{ $artikel->id }})"
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
                    {{ $artikels->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">TAMBAH ARTIKEL</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/store_artikel" method="POST" class="" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group mb-0">
                        <label for="editor">Editor</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        <input name="editor" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" placeholder="Editor..." value="{{ old('editor') }}">
                        @error('editor') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="judul">Judul Artikel</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        <input name="judul" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" placeholder="Judul Artikel..." value="{{ old('judul') }}">
                        @error('judul') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-0">
                        <label for="slug_artikel">Slug Artikel</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        <input name="slug_artikel" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" placeholder="judul-artikel..."
                            value="{{ old('slug_artikel') }}">
                        @error('slug_artikel') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-3" wire:ignore>
                        <label for="isi">Isi Artikel</label>
                        <textarea type="text" input="isi" id="summernote" class="form-control summernote"
                            name="isi">{{ old('isi') }}"</textarea>
                    </div>
                    <div class="form-group mb-0">
                        <label for="gambar_artikel">Gambar Artikel</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-2 form-file-upload form-file-simple ">
                        <input name="gambar_artikel" type="file" class="form-control form-control-sm" id="basic-url"
                            aria-describedby="basic-addon3" value="{{ old('gambar_artikel') }}">
                        @error('gambar_artikel') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-0">
                        <label for="kategori">Kategori</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        <select name="kategoris[]"
                            class="form-control @error('kategoris') is-invalid @enderror required">
                            <option hidden>-- Pilih --</option>
                            @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}"
                                {{ (collect(old('kategoris'))->contains($kategori->id)) ? 'selected':'' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                            @endforeach
                        </select>
                        @error('kategoris') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-0">
                        <label for="tags">Tags</label>
                    </div>
                    <div class="form-group  mb-3">
                        {{-- <select class="form-select form-select-solid js-example-basic-multiple @error('tags') is-invalid @enderror" name="tags[]"  data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" > --}}
                        <select
                            class="form-select form-select-solid js-example-basic-multiple @error('tags') is-invalid @enderror"
                            name="tags[]" data-control="select2" data-placeholder="--- Pilih Tag ---"
                            data-allow-clear="true" multiple="multiple">
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                {{ (collect(old('tags'))->contains($tag->id)) ? 'selected':'' }}>
                                {{ $tag->nama_tag }}
                            </option>
                            @endforeach
                        </select>
                        @error('tags') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
