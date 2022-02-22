<?php

namespace App\Http\Controllers;

 use App\Models\Artikel;
use App\Models\Tags;
use App\Models\Kategori;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public $path;

    public function __construct()
    {
        $this->middleware(['auth']);
        $this->path = 'assets/img/artikel';
    }

    public function index()
    {
        // $artikels = Artikel::leftJoin('kategori_artikel', function($join) use($id){
        //     $join->on('kategori.id', '=', 'kategori_artikel.kategori_id')
        //     ->where('kategori_artikel.artikel_id','=', $id);
        //   })
        //   ->whereNotNull('kategori_artikel.artikel_id')//Not Null Filter
        //   ->get();
        $artikels = Artikel::has('kategoris', 'tags')->get();
        // $kategori_artikels = KategoriArtikel::get();
        // $artikels = Artikel::get();
        $tags = Tags::get();
        $kategoris = Kategori::get();

        // dd($kategori_artikels);
        return view('admin.artikel', compact('tags','kategoris', 'artikels'));
    }

    public function store_artikel(Request $request)
    {
        $kategori = Kategori::get();
        $tags = Tags::all();

        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'slug_artikel'    => 'required',
            'editor'       => 'required',
            'isi'   => 'required',
            'gambar_artikel'   => 'required|image',
            'kategoris'   => 'required',
            'tags'   => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Tambah artikel gagal, isi semua field.');
            return back()->withErrors($validator)->withInput();
        }


        if(!empty($request->gambar_artikel)){
            $file = $request->file('gambar_artikel');
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = $this->path;
            $file->move($tujuan_upload,$nama_file);
        }

        $artikel =  new Artikel;

        $artikel->judul      = $request->judul;
        $artikel->slug_artikel = $request->slug_artikel;
        $artikel->editor    = $request->editor;
        $artikel->isi    = $request->isi;
        $artikel->views    = 0;
        $artikel->is_active    = 1;
        $artikel->gambar_artikel      = $nama_file;
        $artikel->save();


        // $kategori_artikel = new KategoriArtikel;
        // $kategori_artikel->kategori_id = $request->kategori_id;
        // $kategori_artikel->artikel_id = $artikel->id;
        if(!empty($request->tags)){
            foreach (request('tags') as $tag) {
                $artikel->tags()->attach($tag);
                // $artikel->tags()->save($tag);
            }
        }
        foreach (request('kategoris') as $kategori) {
            $artikel->kategoris()->attach($kategori);
            // $artikel->tags()->save($tag);
        }

        session()->flash('message', 'Tambah Artikel berhasil.');
        return redirect('/admin/artikel');
    }

    public function edit_artikel($id)
    {
        $artikels = Artikel::has('kategoris')->find($id);
        // $artikels = Artikel::has('tags')->find($id);
        $artikels1 = Artikel::find($id);
        $kategoris = Kategori::get();
        $tags = Tags::get();

        // dd($artikels);

        return view('admin.edit-artikel', compact('artikels', 'artikels1', 'kategoris', 'tags'));
    }

    public function update_artikel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'judul'         => 'required',
            // 'slug_artikel'    => 'required',
            // 'editor'       => 'required',
            // 'isi'   => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Update artikel gagal.');
            return back()->withErrors($validator)->withInput();
        }

        if(!empty($request->gambar_artikel)){
            $file = $request->file('gambar_artikel');
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = $this->path;
            $file->move($tujuan_upload,$nama_file);

            $artikel = Artikel::has('kategoris', 'tags')->find($request->id);

            $artikel->judul      = $request->judul;
            $artikel->slug_artikel = $request->slug_artikel;
            $artikel->editor    = $request->editor;
            $artikel->isi    = $request->isi;
            $artikel->gambar_artikel  = $nama_file;
            $artikel->save();

            if(!empty($request->tags)){

                foreach (request('tags') as $tag) {
                    $artikel->tags()->syncWithoutDetaching($tag);
                    // $artikel->tags()->save($tag);
                }
            }
            if(!empty($request->kategoris)){
                foreach (request('kategoris') as $kategori) {
                    $artikel->kategoris()->syncWithoutDetaching($kategori);
                    // $artikel->tags()->save($tag);
                }
            }

            session()->flash('message', 'Update Artikel berhasil.');
            return redirect('/admin/artikel');

        } else {
            $artikel = Artikel::find($request->id);

            $artikel->judul      = $request->judul;
            $artikel->slug_artikel = $request->slug_artikel;
            $artikel->editor    = $request->editor;
            $artikel->isi    = $request->isi;
            $artikel->save();

            if(!empty($request->tags)){
            $tag = Tags::find($request->id);

                foreach (request('tags') as $tag) {
                    $artikel->tags()->syncWithoutDetaching($tag);
                    // $artikel->tags()->save($tag);
                }
            }
            if(!empty($request->kategoris)){
            $kategori = Kategori::find($request->id);
                foreach (request('kategoris') as $kategori) {
                    $artikel->kategoris()->syncWithoutDetaching($kategori);
                    // $artikel->tags()->save($tag);
                }
            }

            session()->flash('message', 'Update Artikel berhasil.');
            return redirect('/admin/artikel');
        }
    }

}
