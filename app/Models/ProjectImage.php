<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table = 'project_images';

    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }
}
