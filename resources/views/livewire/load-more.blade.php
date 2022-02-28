<div>
    <div>
        @foreach ($artikelKats as $artikelKat)
        <div class="d-flex mb-3 shadow-sm border border-primary  align-items-center">
            <img class="justify-content-center" src="{{ url('/assets/img/artikel/'.$artikelKat->gambar_artikel) }}"
                style="width: 100px; height: 100px; object-fit: cover;">
            <div class="w-100 d-flex flex-column justify-content-center bg-light px-2" style="height: 160px;">
                <a class="h6 mb-0 mt-2 text-capitalize" href="{{ url('/') }}/{{ $artikelKat->slug_artikel }}">{{ Str::words(ucfirst($artikelKat->judul), 8)}}</a>
                <div class="mb-1 mt-1" style="font-size: 13px;">
                    @foreach ($artikelKat->kategoris->take(1) as $kategori)
                    <a href="{{ url('/'."kategori/".$kategori->slug_kategori) }}">{{ ucfirst($kategori->nama_kategori) }}</a>
                    <span class="px-1">/</span>
                    <a href="#">{{ $artikelKat->created_at->isoFormat('dddd, D MMM Y') }}</a>
                    @endforeach
                </div>
                <p class="" style="font-size: 12px">{{ Str::words(strip_tags($artikelKat->isi), 13)  }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
    <button wire:click="load" class="btn btn-primary text-center">Load more...</button>
</div>
</div>
