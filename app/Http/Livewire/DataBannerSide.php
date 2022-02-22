<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bannerside;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DataBannerSide extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';

    private $bannersides;

    public $isTambah = false;

    public $isEdit = false;

    public $gambar_bannerside, $keterangan_bannerside, $status_bannerside;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $updatesQueryString = ['search'];

    public function render()
    {
        if ($this->search == null) {
            $this->bannersides = Bannerside::orderBy('bannersides.updated_at','desc')->paginate($this->paginate);
        }else{
            $this->bannersides = Bannerside::where('bannersides.keterangan_bannerside', 'like', '%'.$this->search.'%')->orderBy('bannersides.updated_at','desc')->paginate($this->paginate);
        }
        return view('livewire.data-banner-side',[
            'bannersides'=>$this->bannersides
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
        $this->gambar_bannerside = '';
        $this->keterangan_bannerside = '';
        $this->status_bannerside= '';
    }

    public function store()
    {
        $this->validate([
            'gambar_bannerside' => 'required|image',
            'keterangan_bannerside' => 'required',
        ]);

        Bannerside::create([
                'gambar_bannerside' => $this->gambar_bannerside->store('bannerside'),
                'keterangan_bannerside' => $this->keterangan_bannerside,
                'status_bannerside' => 1,
            ]);

        $this->resetInputFields();
        $this->isTambah = false;
        session()->flash('message', 'Tambah banner side berhasil.');
    }

    public function edit($id)
    {
        $this->isTambah = false;
        $this->isEdit = true;

        $bannersides = Bannerside::findOrFail($id);

        $this->bannerside_id = $id;
        // $this->gambar_bannerside = $bannersides->gambar_bannerside;
        $this->keterangan_bannerside = $bannersides->keterangan_bannerside;
    }

    public function update()
    {
        $this->validate([
            'keterangan_bannerside' => 'required',
        ]);

        $bannersides = Bannerside::findOrFail($this->bannerside_id);

        if (!empty($this->gambar_bannerside)) {
            $bannersides->update([
                'gambar_bannerside' => $this->gambar_bannerside->store('bannerside'),
                'keterangan_bannerside' => $this->keterangan_bannerside,
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update banner side berhasil.');
        } else {
            $bannersides->update([
                'keterangan_bannerside' => $this->keterangan_bannerside,
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update banner side berhasil.');
        }
    }

    public function update_status_off($id)
    {
        $bannerside = Bannerside::findOrFail($id);
        $bannerside->update([
            'status_bannerside' => 2,
        ]);
        session()->flash('message', 'Update banner side berhasil.');
    }

    public function update_status_on($id)
    {
        $bannerside = Bannerside::findOrFail($id);
        $bannerside->update([
            'status_bannerside' => 1,
        ]);
        session()->flash('message', 'Update banner side berhasil.');
    }

    public function delete($id)
    {
        Bannerside::find($id)->delete();
        session()->flash('message', 'Delete banner side berhasil.');
    }
}
