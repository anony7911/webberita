<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Tags;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DataArtikel extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';
    // public $modelId;

    private $artikels, $kategoris, $tags;

    // protected $listener = [
    //     'getModelId'
    // ];

    // public function getModelId($modelId)
    // {
    //     $this->modelId = $modelId;
    // }

    public $selectitem;

    public function select($itemid)
    {
        $this->selectitem = $itemid;
        $artikelUpdate = Artikel::find($this->selectitem);
        $this->editor_edit = $artikelUpdate->editor;
        $this->judul_edit = $artikelUpdate->judul;
        $this->slug_artikel_edit = $artikelUpdate->slug_artikel;
        $this->isi = $artikelUpdate->isi;
        $this->gambar_artikel = $artikelUpdate->gambar_artikel;
        // $this->emit('getModelId', $this->selectitem);
        $this->dispatchBrowserEvent('openEditModal');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $updatesQueryString = ['search'];

    public $judul, $slug_artikel, $editor, $isi, $gambar_artikel, $views, $is_active;

    public function render()
    {
        $this->kategoris = Kategori::get();
        $this->tags = Tags::get();
        if ($this->search == null) {
            $this->artikels = Artikel::orderBy('artikels.updated_at','desc')->paginate($this->paginate);
        }else{
            $this->artikels = Artikel::where('artikels.judul', 'like', '%'.$this->search.'%')->orderBy('artikels.updated_at','desc')->paginate($this->paginate);
        }

        return view('livewire.data-artikel',[
            'artikels'=>$this->artikels,
            'kategoris'=>$this->kategoris,
            'tags'=>$this->tags,

        ]);
    }

    public function store()
    {

        $validatedDate = $this->validate([
            'judul' => 'required',
            'slug_artikel' => 'required',
            'editor' => 'required',
            'isi' => 'required',
            'gambar_artikel' => 'required|image',
        ]);

        Artikel::create([
            'judul' => $this->judul,
            'slug_artikel' => $this->slug_artikel,
            'editor' => $this->editor,
            'isi' => $this->isi,
            'gambar_artikel' => $this->gambar_artikel->store('img/artikel'),
            'views' => 1,
            'is_active' => 1,
            ]);
        session()->flash('message', 'Tambah Artikel berhasil.');
    }

    public function edit($id)
    {
        // $this->isTambah = false;
        // $this->isEdit = true;

        // $artikels = Artikel::findOrFail($id);
        // $artikels = Artikel::where('id',$id)->first();
        // $this->artikels_id_edit = $id;
        // $this->judul_edit = $artikels->judul;
        // $this->slug_artikel_edit = $artikels->slug_artikel;
        // $this->editor_edit = $artikels->editor;
        // $this->isi_edit = $artikels->isi;
        // $this->gambar_artikel_edit = $artikels->gambar_artikel;
    }

    public function update()
    {
        // $validatedDate = $this->validate([
        //     'judul' => 'required',
        //     'slug_artikel' => 'required',
        //     'editor' => 'required',
        //     'isi' => 'required',
        //     'gambar_artikel' => 'required|image',
        // ]);

        // $artikels = Artikel::findOrFail($this->artikels_id);

        //     $artikels->update([
        //         'judul' => $this->judul,
        //         'slug_artikel' => $this->slug_artikel,
        //         'editor' => $this->editor,
        //         'isi' => $this->isi,
        //         'gambar_artikel' => $this->gambar_artikel->store('img/artikel'),
        //     ]);

        //     $this->isTambah = false;
        //     $this->isEdit = false;

        //     session()->flash('message', 'Update Artikel berhasil.');
    }

    public function delete($id)
    {
        Artikel::find($id)->delete();
        session()->flash('error', 'Delete Artikel berhasil.');
    }
}
