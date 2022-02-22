<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikels';
    protected $guarded = [];

    public function getSlugArtikelAttribute($value){
        return $this->attributes['slug_artikel'] = strtolower($value);
    }

    // public function setSlugArtikelAttribute($value){
    //     return $this->attributes['judul'] = ucfirst($value);
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tags::class);
    // }

    public function kategoris()
    {
        return $this->belongsToMany(Kategori::class, 'kategori_artikels');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'tags_artikels');
    }

    // public function kategori_artikels()
    // {
    //     return $this->belongsToMany(KategoriArtikel::class);
    // }

    public function kategori_artikels()
    {
        return $this->belongsTo(KategoriArtikel::class);
    }
}
