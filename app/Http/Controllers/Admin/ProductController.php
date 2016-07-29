<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'description' => 'required',
            'price' => 'required',
            'url' => 'max:255'
        ]);

        return view('portfolio.create', [
            'pageHeading' => 'Product created'
        ]);
    }
}