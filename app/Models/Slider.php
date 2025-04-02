<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image',
        'title_ar',
        'subtitle_ar',
        'title_fr',
        'subtitle_fr',
        'title_en',
        'subtitle_en',
        'btnText_ar',
        'btnText_fr',
        'btnText_en',
        'url',
    ];
}
