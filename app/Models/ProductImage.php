<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';

    protected $fillable = [
        'image_id',
        'product_id',
    ];

    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
