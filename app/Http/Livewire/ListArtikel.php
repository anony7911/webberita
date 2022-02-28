<?php

namespace App\Http\Livewire;

use App\Models\Tags;
use App\Models\Artikel;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Bannerhead;
use App\Models\Bannerside;
use GuzzleHttp\Psr7\Request;
use Livewire\WithPagination;

class ListArtikel extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 3;
    public $search = '';

    private $artikelKats;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $updatesQueryString = ['search'];
    public $amount = 5;

    public function load()
    {
        $this->amount = $this->amount + 5;
    }

    public function render()
    {
        // $this->artikelKats = Artikel::wherehas('kategoris')->where('is_active', 1)->where('judul', 'like', '%' . $this->search . '%')->paginate($this->amount);
        $this->artikelKats = Kategori::with('artikels')->paginate($this->amount);
        return view('livewire.list-artikel',[
            'artikelKats' => $this->artikelKats,
            ]);
    }

}
