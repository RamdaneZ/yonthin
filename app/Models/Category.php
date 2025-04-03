<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_en',
        'name_fr',
        'name_ar',
        'image',
        'slug',
        'actif',
    ];
    
    public function products_count(){
        return $this->hasMany(Product::class,'category_id','id')->count();
    }
}
