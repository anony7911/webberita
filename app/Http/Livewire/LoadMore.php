<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;

class LoadMore extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 1;
    public $search = '';

    private $headlines, $artikelKats;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public $amount = 5;

    protected $updatesQueryString = ['search'];

    public function render()
    {
        if ($this->search == null) {
            $this->artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->take($this->amount)->get();
        }else{
            $this->artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->take($this->amount)->get();
        }

        return view('livewire.load-more',[
            'artikelKats'=>$this->artikelKats,
        ]);
    }

    public function load()
    {
            $this->amount = $this->amount + 5;
    }

}
