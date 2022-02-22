<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Bannerhead;
use App\Models\Bannerside;
use Livewire\WithPagination;

class ListArtikel extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 3;
    public $search = '';

    // private $kategoriArts;
    // private $artikelKats;
    private $artikelKats1;

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
    public $roles;

    public function render()
    {
        // if ($this->search == null) {
            $this->artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->take($this->amount)->get();
            // $this->artikelKats= Kategori::with('artikels')->orderBy('id','desc')->take($this->amount)->get();
        // }else{
        //     $this->artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->take($this->amount)->get();
        // }

        return view('livewire.list-artikel',[
            // 'kategoriArts' => $this->kategoriArts,
            'artikelKats' => $this->artikelKats,
            ]);
    }

}
