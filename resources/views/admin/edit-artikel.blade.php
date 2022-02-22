@extends('admin.layouts.template')
@section('styles1')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" /> --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="{{ url('/') }}/assets/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3 pl-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-left">
                                <h4 class="text-white text-capitalize ps-3">UPDATE ARTIKEL</h4>
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
                            <span
                                class="alert-text text-white opacity-10"><strong>{{ session('message') }}</strong></span>
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
                            <span
                                class="alert-text text-white opacity-10"><strong>{{ session('error') }}</strong></span>
                            <button type="button" class="btn-close text-white opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif
                    <form class="py-4 px-4 pt-0" action="{{ url('/admin/artikel', $artikels->id) }}" method="POST"
                        class="" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-dynamic mb-0">
                            <label for="editor">Editor</label>
                        </div>
                        <div class=" input-group input-group-dynamic mb-3">
                            {{-- <input name="id_artikel_edit" type="text" class="form-control" id="id_artikel_edit"
                                        aria-describedby="basic-addon3" placeholder="Editor..." value="{{ old('editor') }}">
                            --}}
                            <input name="editor" type="text" class="form-control" id="editor"
                                aria-describedby="basic-addon3" placeholder="Editor..." value="{{ $artikels->editor }}">
                            @error('editor') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                        </div>
                        <div class=" mb-2">
                            <label for="judul">Judul Artikel</label>
                        </div>
                        <div class=" input-group input-group-dynamic mb-3">
                            <input name="judul" type="text" class="form-control" id="basic-url"
                                aria-describedby="basic-addon3" placeholder="Judul Artikel..."
                                value="{{ $artikels->judul }}">
                            @error('judul') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                        </div>
                        <div class=" mb-0">
                            <label for="slug_artikel">Slug Artikel</label>
                        </div>
                        <div class=" input-group input-group-dynamic mb-3">
                            <input name="slug_artikel" type="text" class="form-control" id="basic-url"
                                aria-describedby="basic-addon3" placeholder="judul-artikel..."
                                value="{{ $artikels->slug_artikel }}">
                            @error('slug_artikel') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                        </div>
                        <div class=" mb-3" wire:ignore>
                            <label for="isi">Isi Artikel</label>
                            <textarea type="text" input="isi" id="summernote_update" class="form-control summernote"
                                name="isi">{{ $artikels->isi }}</textarea>
                        </div>
                        <div class=" mb-0">
                            <label for="gambar_artikel">Gambar Artikel <span class="text-danger text-xxs">*Kosongkan
                                    jika tidak ingin diubah.</span></label>
                        </div>
                        <div class=" input-group input-group-dynamic mb-2 form-file-upload form-file-simple ">
                            <input name="gambar_artikel" type="file" class="form-control form-control-sm" id="basic-url"
                                aria-describedby="basic-addon3"
                                value="{{ url('/assets/img/artikel/'.$artikels->gambar_artikel) }}">
                            @error('gambar_artikel') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                        </div>
                        <div class=" mb-0">
                            <label for="kategori">Kategori <span class="text-danger text-xxs">*Kosongkan jika tidak
                                    ingin diubah.</span></label>
                        </div>
                        <div class=" input-group input-group-dynamic mb-3">
                            <select name="kategoris[]"
                                class="form-select form-select-solid js-example-basic-multiple1 @error('kategoris') is-invalid @enderror" data-control="select2" data-placeholder="--- Pilih Ketegori ---"
                                data-allow-clear="true">
                                @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ (collect(old('kategoris'))->contains($kategori->id)) ? 'selected':'' }}>
                                    {{ $kategori->nama_kategori }}
                                </option>
                                @endforeach
                            </select>
                            @error('kategoris') <span class="text-danger text-xxs">{{ $message }}</span>@enderror
                        </div>
                        <div class=" mb-0">
                            <label for="tags">Tags <span class="text-danger text-xxs">*Kosongkan jika tidak ingin
                                    diubah.</span></label>
                        </div>
                        <div class="  mb-3">
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
                            <a href="{{ url('/admin/artikel') }}" type="button" class="btn bg-gradient-secondary">Close</a>
                            <button type="submit" class="btn bg-gradient-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script-summernote1')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ url('/') }}/assets/js/select2.min.js"></script>
<script>
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
    $(document).ready(function () {
        $('.js-example-basic-multiple1').select2();
    });

</script>
@endpush
@endsection
