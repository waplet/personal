<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createAction()
    {
        return view('admin.product.create');
    }

    public function postCreateAction(Request $request)
    {
        $validators = [
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:products',
            'description' => 'required',
            'price' => 'required',
            'url' => 'max:255',
        ];

        if ($request->get('id')) {
            // disable check for uniqueness
            $validators['slug'] = 'required|max:255';
        }

        $this->validate($request, $validators);
        $data = [
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'is_available' => $request->get('is_available'),
            'url' => $request->get('url'),
        ];

        $product = Product::updateOrCreate(['id' => $request->get('id')], $data);

        // Create post
        flash('Product updated; Use ' . link_to('/portfolio/' . $product->slug, null, ['target' => '_blank']) . ' to see it');

        return redirect('/admin/product/edit/' . $product->id);
    }

    public function listAction()
    {
        return view('admin.product.list', [
            'products' => Product::paginate(20),
        ]);
    }

    public function editAction($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            flash('Product were not found with id - ' . $productId);
            redirect('/admin/product/list');
        }

        return view('admin.product.create', [
            'product' =>  $product,
        ]);
    }

    public function listImagesAction($productId)
    {
        $images = ProductImage::where('product_id', $productId)->paginate(20);

        return view('admin.image.list', [
            'type' => 'product',
            'images' => $images,
        ]);
    }
}