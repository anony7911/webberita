<?php

namespace App\Http\Livewire;

use App\Models\Tags;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DataTag extends Component
{
    use LivewireAlert;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';

    private $tags;

    public $isTambah = false;

    public $isEdit = false;

    public $nama_tag, $slug_tag;

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
        $this->nama_tag = '';
        $this->slug_tag = '';
    }

    public function render()
    {
        if ($this->search == null) {
            $this->tags = Tags::orderBy('tags.updated_at','desc')->paginate($this->paginate);
        }else{
            $this->tags = Tags::where('tags.nama_tag', 'like', '%'.$this->search.'%')->orderBy('tags.updated_at','desc')->paginate($this->paginate);
        }

        return view('livewire.data-tag',[
            'tags'=>$this->tags
        ]);
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nama_tag' => 'required',
            'slug_tag' => 'required',
        ]);

        Tags::create(['nama_tag' => $this->nama_tag, 'slug_tag' => $this->slug_tag]);

        $this->resetInputFields();
        $this->isTambah = false;
        session()->flash('message', 'Tambah tags berhasil.');
    }

    public function edit($id)
    {
        $this->isTambah = false;
        $this->isEdit = true;

        $tags = Tags::findOrFail($id);

        $this->tags_id = $id;
        $this->nama_tag = $tags->nama_tag;
        $this->slug_tag = $tags->slug_tag;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nama_tag' => 'required',
            'slug_tag' => 'required',
        ]);

        $tags = Tags::findOrFail($this->tags_id);

            $tags->update([
                'nama_tag' => $this->nama_tag,
                'slug_tag' => $this->slug_tag,
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update tags berhasil.');
    }

    public function delete($id)
    {
        Tags::find($id)->delete();
        session()->flash('message', 'Delete tags berhasil.');
    }
}
