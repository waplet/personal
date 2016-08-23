<?php

namespace App\Models;

use App\Interfaces\ImageAwareInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model implements ImageAwareInterface
{
    protected $table = 'product_images';

    protected $fillable = [
        'image_id',
        'product_id',
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
