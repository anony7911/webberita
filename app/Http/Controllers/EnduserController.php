<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Bannerhead;
use App\Models\Bannerside;
use Illuminate\Http\Request;

class EnduserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function layout()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $artikels = Artikel::orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $headlines = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->first();
        $artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(3);
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $bannersides = Bannerside::orderBy('id','desc')->where('status_bannerside', 1)->paginate(8);
        return view('layout', compact('kategoris', 'bannerheads', 'bannersides', 'artikels', 'headlines','artikelKats'));
    }

    // public function lihat_artikel()
    // {
    //     $artikelDetails = Artikel::where('judul')->first();
    //     return view('artikel', compact('artikelDetails'));
    // }

    public function lihat_kategori()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $artikels = Artikel::orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $headlines = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->first();
        $artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(3);
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $bannersides = Bannerside::orderBy('id','desc')->where('status_bannerside', 1)->paginate(8);
        // $artikelKats1 = Kategori::with('artikels')->orderBy('id','desc')->paginate(3);
        // $kategoris = $artikels->kategoris();
        return view('artikel', compact('kategoris', 'bannerheads', 'bannersides', 'artikels', 'headlines','artikelKats'));
    }
}
