<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $guarded = [];

    public function getSlugKategoriAttribute($value){
        return $this->attributes['slug_kategori'] = strtolower($value);
    }

    // public function artikels()
    // {
    //     return $this->belongsToMany(Artikel::class)->withPivot('kategori_artikels', 'artikel_id');
    // }

    // public function kategori_artikels()
    // {
    //     return $this->belongsToMany(KategoriArtikel::class);
    // }
    public function kategori_artikels()
    {
        return $this->belongsToMany(KategoriArtikel::class);
    }

    public function artikels() {
        return $this->belongsToMany(Artikel::class,'kategori_artikels');
    }
}
