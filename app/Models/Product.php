<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name_en',
        'name_fr',
        'name_ar',
        'image',
        'image2',
        'image3',
        'slug',
        'actif',
    ];
}
