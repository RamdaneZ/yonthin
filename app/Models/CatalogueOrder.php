<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogueOrder extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
