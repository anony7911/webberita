<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsArtikel extends Model
{
    use HasFactory;
    protected $table = 'tags_artikels';
    protected $guarded = [];
}
