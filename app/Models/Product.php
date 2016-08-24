<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'is_available',
        'url'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * Returns path for the image
     *
     * @return string
     */
    public function getFeaturedImage()
    {
        /** @var ProductImage $featuredImage */
        $featuredImage = $this->images()
            ->orderBy('is_featured', 'DESC')
            ->orderBy('id', 'DESC')
            ->first();

        if (!$featuredImage) {
            return '/images/no_picture.png';
        }

        return $featuredImage->getPath();
    }
}
