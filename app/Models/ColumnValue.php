<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColumnValue extends Model
{
    protected $fillable = [
        'column_id',
        'value_en',
        'value_fr',
        'value_ar',
    ];

    public function column()
    {
        return $this->belongsTo(Column::class, 'column_id');
    }
}
