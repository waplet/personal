<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';

    protected $fillable = [
        'title',
        'extension',
    ];

    public function productImage()
    {
        return $this->hasOne(ProductImage::class);
    }

    public function projectImage()
    {
        return $this->hasOne(ProjectImage::class);
    }
}