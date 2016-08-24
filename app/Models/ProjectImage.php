<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectImage extends ImageAbstract
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
