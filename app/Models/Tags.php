<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $guarded = [];

    public function getSlugTagAttribute($value){
        return $this->attributes['slug_tag'] = strtolower($value);
    }

    public function artikels() {
        return $this->hasMany(Artikel::class,'tags_artikels');
    }
}
