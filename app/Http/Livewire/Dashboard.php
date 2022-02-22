<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use App\Models\Bannerhead;
use App\Models\Bannerside;

class Dashboard extends Component
{
    public $artikels, $artikelsAktif,$heads;
    public $headsAktif;

    public function render()
    {
        $this->artikels = Artikel::all()->count();
        $this->artikelsAktif = Artikel::where('is_active', 1)->count();
        $this->heads = Bannerhead::count();
        $this->headsAktif = Bannerhead::where('status_bannerhead', 1)->count();
        $this->sides = Bannerside::count();
        $this->sidesAktif = Bannerside::where('status_bannerside', 1)->count();

        return view('livewire.dashboard', [
            'artikels'=>$this->artikels,
            'artikelsAktif'=>$this->artikelsAktif,
            'heads'=>$this->heads,
            'headsAktif'=>$this->headsAktif,
            'sides'=>$this->sides,
            'sidesAktif'=>$this->sidesAktif,
        ]);
    }
}
