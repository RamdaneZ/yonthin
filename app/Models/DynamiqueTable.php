<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DynamiqueTable extends Model
{
    protected $fillable = [
        'name_en',
        'name_fr',
        'name_ar',
        'product_id',
    ];

    public function columns()
    {
        return $this->hasMany(Column::class,'table_id');
    }
}
