<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexAction()
    {
        return view('admin.product.list', [
            'products' => Product::paginate(20),
        ]);
    }

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

        return redirect('/admin/product/' . $product->id);
    }

    public function editAction($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            flash('Product were not found with id - ' . $productId);
            redirect('/admin/product');
        }

        return view('admin.product.create', [
            'product' =>  $product,
        ]);
    }
}