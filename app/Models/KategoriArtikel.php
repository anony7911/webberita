<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;
    protected $table = 'kategori_artikels';
    protected $guarded = [];

    // public function artikel()
    // {
    //     return $this->hasMany(Artikel::class);
    // }

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
