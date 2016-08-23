<?php

namespace App\Models;

use App\Interfaces\ImageAwareInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectImage extends Model implements ImageAwareInterface
{
    protected $table = 'project_images';

    protected $fillable = [
        'image_id',
        'project_id',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
