<?php

namespace App\Http\Livewire;

use App\Models\Sosmed;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DataSosmed extends Component
{
    use LivewireAlert;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';

    private $sosmeds;

    public $isEdit = false;

    public $link_sosmed, $nama_sosmed;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $updatesQueryString = ['search'];

    public function batalEdit()
    {
        $this->isEdit = false;
    }

    public function render()
    {

        if ($this->search == null) {
            $this->sosmeds = Sosmed::orderBy('sosmeds.updated_at','desc')->paginate($this->paginate);
        }else{
            $this->sosmeds = Sosmed::where('sosmeds.nama_sosmed', 'like', '%'.$this->search.'%')->orderBy('sosmeds.updated_at','desc')->paginate($this->paginate);
        }

        return view('livewire.data-sosmed',[
            'sosmeds'=>$this->sosmeds
        ]);
    }

    public function edit($id)
    {
        $this->isEdit = true;

        $sosmeds = Sosmed::findOrFail($id);

        $this->sosmed_id = $id;
        $this->link_sosmed = $sosmeds->link_sosmed;
        $this->nama_sosmed = $sosmeds->nama_sosmed;
    }

    public function update()
    {
        $sosmeds = Sosmed::findOrFail($this->sosmed_id);

        $sosmeds->update([
            'link_sosmed' => $this->link_sosmed,
        ]);
        $this->isEdit = false;

        session()->flash('message', 'Update link sosial media berhasil.');
    }
}
