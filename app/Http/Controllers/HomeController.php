<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function adminDashboard()
    {
        $jumartikels = Artikel::count();

        return view('admin.dashboard', compact('jumartikels'));
    }

    public function adminManajuser()
    {
        return view('admin.manajemen-user');
    }

    public function adminSosmed()
    {
        return view('admin.sosmed');
    }

    public function adminTags()
    {
        return view('admin.tags');
    }

    public function adminKategori()
    {
        return view('admin.kategori');
    }

    public function adminBannerhead()
    {
        return view('admin.banner-head');
    }

    public function adminBannerside()
    {
        return view('admin.banner-side');
    }

    public function adminKelolaKategori()
    {
        return view('admin.kelola-kategori');
    }

    public function adminKelolaTags()
    {
        return view('admin.kelola-tags');
    }
}
