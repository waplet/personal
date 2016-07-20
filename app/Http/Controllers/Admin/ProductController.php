<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function create()
    {
        return view('portfolio.create', [
            'pageHeading' => 'Create product'
        ]);
    }

    public function postCreate()
    {
        return view('portfolio.create', [
            'pageHeading' => 'Product created'
        ]);
    }
}