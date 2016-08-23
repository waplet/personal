<?php

namespace App\Managers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\UploadedFile;

class ProductImageManager extends ImageManagerAbstract
{
    /**
     * @param UploadedFile $file
     * @param Product $product
     *
     * @return ProductImage
     */
    public function save(UploadedFile $file, Product $product)
    {
        $image = $this->saveImage($file);

        return $image->productImage()->save(
            new ProductImage(['product_id' => $product->id])
        );
    }
}