<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function create()
    {
        return view('portfolio.create', [
            'pageHeading' => 'Create product'
        ]);
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:products',
            'description' => 'required',
            'price' => 'required',
            'url' => 'max:255'
        ]);

        $product = Product::create([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'is_available' => $request->get('is_available'),
            'url' => $request->get('url'),
        ]);

        // Create post
        flash('Product added; Use ' . link_to('/product/' . $product->slug) . ' to see it');

        return view('portfolio.create', [
            'pageHeading' => 'Product created'
        ]);
    }
}