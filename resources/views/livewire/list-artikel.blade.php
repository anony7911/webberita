<div>
    <div>
        @foreach ($artikelKats as $artikelKat)
        <div class="d-flex mb-3 shadow-sm border border-primary">
            <img src="{{ url('/assets/img/artikel/'.$artikelKat->gambar_artikel) }}"
                style="width: 150px; height: 150px; object-fit: cover;">
            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 150px;">
                <a class="h6 mb-0 mt-2 text-capitalize" href="">{{ Str::words(ucfirst($artikelKat->judul), 8)}}</a>
                <div class="mb-1 mt-1" style="font-size: 13px;">
                    @foreach ($artikelKat->kategoris->take(1) as $kategori)
                    <a href="{{ url('/'.$kategori->nama_kategori) }}">{{ ucfirst($kategori->nama_kategori) }}</a>
                    <span class="px-1">/</span>
                    <a href="#">{{ $artikelKat->created_at->isoFormat('dddd, D MMM Y') }}</a>
                    @endforeach
                </div>
                <p class="" style="font-size: 12px">{{ str_limit(strip_tags($artikelKat->isi), $limit = 50, $end = '...') }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
    <button wire:click="load" class="btn btn-primary text-center">Load more...</button>
</div>
</div>
