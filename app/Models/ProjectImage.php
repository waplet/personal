<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table = 'project_images';

    protected $fillable = [
        'image_id',
        'project_id',
    ];

    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }
}
