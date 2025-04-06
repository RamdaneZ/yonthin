<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $fillable = [
        'table_id',
        'name_en',
        'name_fr',
        'name_ar',
    ];

    public function table()
    {
        return $this->belongsTo(DynamiqueTable::class, 'table_id');
    }

    public function columnValues()
    {
        return $this->hasMany(ColumnValue::class, 'column_id');
    }
}
