<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function createAction()
    {
        return view('portfolio.create', [
            'pageHeading' => 'Create product'
        ]);
    }

    public function postCreateAction(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'url' => 'max:255'
        ]);

        return view('portfolio.create', [
            'pageHeading' => 'Product created'
        ]);
    }

    public function listAction()
    {
        return view('portfolio.list', [
            'products' => Product::all(),
            'pageHeading' => 'List products'
        ]);
    }
}