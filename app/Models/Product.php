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
        'description_en',
        'description_fr',
        'description_ar',
        'adv_en',
        'adv_fr',
        'adv_ar',
        'image',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'video',
        'whatCanDoSection_en',
        'whatCanDoSection_fr',
        'whatCanDoSection_ar',
        'slug',
        'actif',
    ];
}
