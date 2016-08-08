<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'price',
        'is_available',
        'url'
    ];
}
