<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';

    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function projectImages()
    {
        return $this->hasMany('App\Models\ProjectImage');
    }
}