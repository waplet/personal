<?php

namespace App\Managers;

use App\Models\ProductImage;

class ProductImageManager extends ImageManagerAbstract
{
    protected $model = ProductImage::class;
}