<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends ImageAbstract
{
    protected $table = 'product_images';

    protected $fillable = [
        'image_id',
        'product_id',
        'is_featured',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
