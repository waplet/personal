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
        $imageId = $this->saveImage($file);

        $data = [
            'image_id' => $imageId,
            'product_id' => $productId,
        ];

        return ProductImage::create($data);
    }
}