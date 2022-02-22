<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bannerhead;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DataBannerHead extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';

    private $bannerheads;

    public $isTambah = false;

    public $isEdit = false;

    public $gambar_bannerhead, $keterangan_bannerhead, $status_bannerhead;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $updatesQueryString = ['search'];

    public function render()
    {
        if ($this->search == null) {
            $this->bannerheads = Bannerhead::orderBy('bannerheads.updated_at','desc')->paginate($this->paginate);
        }else{
            $this->bannerheads = Bannerhead::where('bannerheads.keterangan_bannerhead', 'like', '%'.$this->search.'%')->orderBy('bannerheads.updated_at','desc')->paginate($this->paginate);
        }
        return view('livewire.data-banner-head',[
            'bannerheads'=>$this->bannerheads
        ]);
    }

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
        $this->gambar_bannerhead = '';
        $this->keterangan_bannerhead = '';
        $this->status_bannerhead= '';
    }

    public function store()
    {
        $this->validate([
            'gambar_bannerhead' => 'required|image',
            'keterangan_bannerhead' => 'required',
        ]);

        Bannerhead::create([
                'gambar_bannerhead' => $this->gambar_bannerhead->store('bannerhead'),
                'keterangan_bannerhead' => $this->keterangan_bannerhead,
                'status_bannerhead' => 1,
            ]);

        $this->resetInputFields();
        $this->isTambah = false;
        session()->flash('message', 'Tambah banner top berhasil.');
    }

    public function edit($id)
    {
        $this->isTambah = false;
        $this->isEdit = true;

        $bannerheads = Bannerhead::findOrFail($id);

        $this->bannerhead_id = $id;
        // $this->gambar_bannerhead = $bannerheads->gambar_bannerhead;
        $this->keterangan_bannerhead = $bannerheads->keterangan_bannerhead;
    }

    public function update()
    {
        $this->validate([
            'keterangan_bannerhead' => 'required',
        ]);

        $bannerheads = Bannerhead::findOrFail($this->bannerhead_id);

        if (!empty($this->gambar_bannerhead)) {
            $bannerheads->update([
                'gambar_bannerhead' => $this->gambar_bannerhead->store('bannerhead'),
                'keterangan_bannerhead' => $this->keterangan_bannerhead,
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update banner top berhasil.');
        } else {
            $bannerheads->update([
                'keterangan_bannerhead' => $this->keterangan_bannerhead,
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update banner top berhasil.');
        }
    }

    public function update_status_off($id)
    {
        $bannerhead = Bannerhead::findOrFail($id);
        $bannerhead->update([
            'status_bannerhead' => 2,
        ]);
        session()->flash('message', 'Update banner top berhasil.');
    }

    public function update_status_on($id)
    {
        $bannerhead = Bannerhead::findOrFail($id);
        $bannerhead->update([
            'status_bannerhead' => 1,
        ]);
        session()->flash('message', 'Update banner top berhasil.');
    }

    public function delete($id)
    {
        Bannerhead::find($id)->delete();
        session()->flash('message', 'Delete banner top berhasil.');
    }
}
