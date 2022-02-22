<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DataManajuser extends Component
{
    use LivewireAlert;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';

    private $manajusers;

    public $isTambah = false;

    public $isEdit = false;

    public $name, $email, $password;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $updatesQueryString = ['search'];

    public function render()
    {
        if ($this->search == null) {
            $this->manajusers = User::orderBy('users.created_at','desc')->paginate($this->paginate);
        }else{
            $this->manajusers = User::where('users.name', 'like', '%'.$this->search.'%')->orderBy('users.created_at','desc')->paginate($this->paginate);
        }

        return view('livewire.data-manajuser',[
            'manajusers'=>$this->manajusers
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
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $this->password = bcrypt($this->password);

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        $this->resetInputFields();
        $this->isTambah = false;
        // $this->alert('success', 'Tambah akun berhasil!');
        session()->flash('message', 'Tambah akun berhasil.');
    }

    public function edit($id)
    {
        $this->isTambah = false;
        $this->isEdit = true;

        $manajusers = User::findOrFail($id);

        $this->user_id = $id;
        $this->name = $manajusers->name;
        $this->email = $manajusers->email;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $manajusers = User::findOrFail($this->user_id);

        if (!empty($this->password)) {
            $manajusers->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update akun berhasil.');
        } else {
            $manajusers->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->resetInputFields();
            $this->isTambah = false;
            $this->isEdit = false;

            session()->flash('message', 'Update akun berhasil.');
        }
    }

    public function delete($id)
    {
        User::find($id)->delete();
        // $this->alert('success', 'Tambah akun berhasil!');
        // toast('success', 'data berhasil dihapus!');
        session()->flash('message', 'Delete akun berhasil.');
    }
}
