@extends('admin.layouts.template')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" /> --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="{{ url('/') }}/assets/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container-fluid py-4">
    @livewire('data-artikel')
</div>
<div class="modal fade " id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">UPDATE ARTIKEL</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/update_artikel" method="[PATCH]" class="" enctype="multipart/form-data">
                @csrf
                @method('[PATCH]')
                <div class="modal-body">
                    <div class="form-group mb-0">
                        <label for="editor">Editor</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        {{-- <input name="id_artikel_edit" type="text" class="form-control" id="id_artikel_edit"
                            aria-describedby="basic-addon3" placeholder="Editor..." value="{{ old('editor') }}"> --}}
                        <input name="editor" type="text" class="form-control" id="editor"
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
                        <textarea type="text" input="isi" id="summernote_update" class="form-control summernote"
                            name="isi">{{ $artikels }}</textarea>
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
{{-- <div class="modal fade " id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">
                    UPDATE ARTIKEL</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{'/admin/udpate_artikel'}}" method="PATCH" class="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-0">
                        <label for="editor">Editor</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        <input wire:model="editor_edit" name="editor_edit" type="text" class="form-control"
                            id="editor_edit" aria-describedby="basic-addon3" placeholder="Editor...">
                        @error('editor_edit') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="judul">Judul Artikel</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        <input wire:model="judul_edit" name="judul_edit" type="text" class="form-control"
                            id="judul_edit" aria-describedby="basic-addon3" placeholder="Judul Artikel...">
                        @error('judul_edit') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-0">
                        <label for="slug_artikel_edit">Slug Artikel</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-3">
                        <input wire:model="slug_artikel_edit" name="slug_artikel_edit" type="text" class="form-control"
                            id="basic-url" aria-describedby="basic-addon3" placeholder="judul-artikel...">
                        @error('slug_artikel_edit') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mb-3" wire:ignore>
                        <label for="isi_update">Isi Artikel</label>
                        <textarea wire:model="isi" type="text" input="isi_update" id="summernote_update"
                            class="form-control summernote" name="isi"></textarea>
                    </div>
                    <div class="form-group mb-0">
                        <label for="gambar_artikel">Gambar Artikel</label>
                    </div>
                    <div class="form-group input-group input-group-dynamic mb-2 form-file-upload form-file-simple ">
                        <input wire:model="gambar_artikel" name="gambar_artikel" type="file"
                            class="form-control form-control-sm" id="basic-url" aria-describedby="basic-addon3">
                        @error('gambar_artikel') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button wire:click.prevent="store()" type="submit"
                            class="btn bg-gradient-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
@push('script-summernote')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ url('/') }}/assets/js/select2.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Ketik isi artikel disini...',
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    $('#summernote_update').summernote({
        placeholder: 'coba',
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });

    window.livewire.on('openEditModal', () => {
            $('#modalEdit').modal('show');
    });
    window.addEventListener('openEditModal', event => {
        $("#modalEdit").modal('show');
    })
    window.addEventListener('closeEditModal', event => {
        $("#modalEdit").modal('hide');
    })

</script>
@endpush
@endsection
