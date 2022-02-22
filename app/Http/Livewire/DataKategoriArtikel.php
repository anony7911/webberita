<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DataKategoriArtikel extends Component
{
    use LivewireAlert;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';

    private $kategoris;

    public $isTambah = false;

    public $isEdit = false;

    public $nama_kategori, $slug_kategori;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $updatesQueryString = ['search'];


    public function klikTambah()
    {
        $this->isTambah = true;
    }

    public function batalTambah()
    {
        $this->isTambah = false;
    }
    public function batalEdit()
    {
        $this->isEdit = false;
    }

    private function resetInputFields(){
        $this->nama_kategori = '';
        $this->slug_kategori = '';
    }

    public function render()
    {
        if ($this->search == null) {
            $this->kategoris = Kategori::orderBy('kategoris.updated_at','desc')->paginate($this->paginate);
        }else{
            $this->kategoris = Kategori::where('kategoris.nama_kategori', 'like', '%'.$this->search.'%')->orderBy('kategoris.updated_at','desc')->paginate($this->paginate);
        }

        return view('livewire.data-kategori-artikel',[
            'kategoris'=>$this->kategoris
        ]);
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nama_kategori' => 'required',
            'slug_kategori' => 'required',
        ]);

        Kategori::create(['nama_kategori' => $this->nama_kategori, 'slug_kategori' => $this->slug_kategori]);

        $this->resetInputFields();
        $this->isTambah = false;
        session()->flash('message', 'Tambah kategoris berhasil.');
    }

    public function edit($id)
    {
        $this->isTambah = false;
        $this->isEdit = true;

        $kategoris = Kategori::findOrFail($id);

        $this->kategoris_id = $id;
        $this->nama_kategori = $kategoris->nama_kategori;
        $this->slug_kategori = $kategoris->slug_kategori;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nama_kategori' => 'required',
            'slug_kategori' => 'required',
        ]);

        $kategoris = Kategori::findOrFail($this->kategoris_id);

            $kategoris->update([
                'nama_kategori' => $this->nama_kategori,
                'slug_kategori' => $this->slug_kategori,
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update kategoris berhasil.');
    }

    public function delete($id)
    {
        Kategori::find($id)->delete();
        session()->flash('message', 'Delete kategoris berhasil.');
    }
}
