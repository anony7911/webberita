<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Bannerhead;
use App\Models\Bannerside;
use App\Models\Sosmed;
use App\Models\Tags;
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
        $headlines = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->first();
        $artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(3);
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $bannersides = Bannerside::orderBy('id','desc')->where('status_bannerside', 1)->paginate(8);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        // dd($kategoris);
        return view('layout', compact('tags','kategoris', 'bannerheads', 'bannersides', 'artikels', 'headlines','artikelKats', 'igs', 'was', 'tks', 'fbs','populars'));
    }

    // public function lihat_artikel()
    // {
    //     $artikelDetails = Artikel::where('judul')->first();
    //     return view('artikel', compact('artikelDetails'));
    // }

    public function lihat_kategori($slug_kategori)
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        // $kategoris1 = Kategori::find($request->id);
        $headlines = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->first();
        // $artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->where('kategoris.slug_kategori',$slug_kategori)->paginate(5);
        $artikelKats = Kategori::has('artikels')->orderBy('id','desc')->where('slug_kategori',$slug_kategori)->paginate(5);
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $bannersides = Bannerside::orderBy('id','desc')->where('status_bannerside', 1)->paginate(8);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('artikel', compact('tags','kategoris', 'bannerheads', 'bannersides', 'artikels', 'headlines','artikelKats','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function lihat_tag($slug_tag)
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        // $kategoris1 = Kategori::find($request->id);
        $headlines = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->first();
        // $artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->where('kategoris.slug_kategori',$slug_kategori)->paginate(5);
        // $artikelKats = Kategori::has('artikels')->orderBy('id','desc')->where('slug_kategori',$slug_tag)->paginate(5);
        $artikelTags = Tags::has('artikels')->orderBy('id','desc')->where('slug_tag',$slug_tag)->paginate(5);
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $bannersides = Bannerside::orderBy('id','desc')->where('status_bannerside', 1)->paginate(8);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('tags', compact('artikelTags','tags','kategoris', 'bannerheads', 'bannersides', 'artikels', 'headlines','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function tentang_kami()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);
        $tags1 = Tags::orderBy('id','desc')->paginate(13);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('tentang-kami', compact('tags1','tags','kategoris', 'artikels', 'bannerheads','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function info_iklan()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('info-iklan', compact('tags','kategoris', 'artikels', 'bannerheads','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function redaksi()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('redaksi', compact('tags','kategoris', 'artikels', 'bannerheads','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function pedoman_media_siber()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('pedoman-media-siber', compact('tags','kategoris', 'artikels', 'bannerheads','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function sop_perlindungan_wartawan()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('sop-perlindungan-wartawan', compact('tags','kategoris', 'artikels', 'bannerheads','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function kode_etik_internal()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('kode-etik-internal', compact('tags','kategoris', 'artikels', 'bannerheads','igs', 'was', 'tks', 'fbs','populars'));
    }

    public function privacy_policy()
    {
        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('privacy-policy', compact('tags','kategoris', 'artikels', 'bannerheads','igs', 'was', 'tks', 'fbs','populars'));
    }

    // public function detail_artikel($month, $year, $slug_artikel)
    public function detail_artikel($slug_artikel)
    {
        $detartikels = Artikel::with('kategoris','tags')->where('slug_artikel',$slug_artikel)->first();
        // $detartikels1 = Artikel::with('tags')->where('slug_artikel',$slug_artikel)->first();

        $kategoris = Kategori::where('id', '>', 1)->get();
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $bannersides = Bannerside::orderBy('id','desc')->where('status_bannerside', 1)->paginate(8);
        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $tags = Tags::orderBy('id','desc')->paginate(13);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        // return view('detail-artikel', compact('artikels','month','year'));
        return view('detail-artikel', compact('bannersides','kategoris','artikels','bannerheads','tags','populars','igs', 'was', 'tks', 'fbs','detartikels'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $artikelKats = Artikel::with('kategoris', 'tags')->where('isi', 'like', "%" . $keyword . "%")->paginate(5);

        $kategoris = Kategori::where('id', '>', 1)->get();
        // $headlines = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->first();
        // $artikelKats = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(3);
        $bannerheads = Bannerhead::orderBy('id','desc')->where('status_bannerhead', 1)->paginate(1);
        $bannersides = Bannerside::orderBy('id','desc')->where('status_bannerside', 1)->paginate(8);
        $tags = Tags::orderBy('id','desc')->paginate(13);

        $artikels = Artikel::has('kategoris')->orderBy('id','desc')->where('is_active', 1)->paginate(5);
        $populars = Artikel::has('kategoris')->orderBy('views','desc')->where('is_active', 1)->paginate(5);

        $igs = Sosmed::where('id', 1)->first();
        $was = Sosmed::where('id', 2)->first();
        $tks = Sosmed::where('id', 3)->first();
        $fbs = Sosmed::where('id', 4)->first();

        return view('cari-artikel', compact('tags','kategoris', 'bannerheads', 'bannersides', 'artikels','artikelKats', 'igs', 'was', 'tks', 'fbs','populars'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
