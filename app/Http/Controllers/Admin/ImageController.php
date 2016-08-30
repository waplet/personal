<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Managers\ProductImageManager;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function productImages(Product $product)
    {
        $images = ProductImage::where('product_id', $product->id)->paginate(20);

        return view('admin.image.list', [
            'type' => 'product',
            'images' => $images,
            'object' => $product,
            'newImage' => new ProductImage,
        ]);
    }

    public function addProductImage(Product $product, Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
        ]);

        (new ProductImageManager())->save($request->file('image'), $product, $request->get('is_featured'));

        return redirect('/admin/product/' . $product->id . '/images');
    }

    public function deleteProductImage(ProductImage $productImage)
    {
        (new ProductImageManager())->removeImage($productImage);

        return redirect()->back();
    }
}