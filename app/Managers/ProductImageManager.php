<?php

namespace App\Managers;

use App\Models\ProductImage;
use Illuminate\Http\UploadedFile;

class ProductImageManager extends ImageManagerAbstract
{
    /**
     * @param UploadedFile $file
     * @param $productId
     *
     * @return ProductImage
     */
    public function save(UploadedFile $file, $productId)
    {
        $image = $this->saveImage($file);

        return $image->productImages()->save(
            new ProductImage(['product_id' => $productId])
        );
    }

    public function removeImage($productImageId)
    {
        $productImage = ProductImage::find($productImageId);

        if (!$productImage) {
            throw new \InvalidArgumentException('No product image found with specified id: ' . $productImageId);
        }

        $imageId = $productImage->image_id;

        $this->remove($imageId);
    }
}