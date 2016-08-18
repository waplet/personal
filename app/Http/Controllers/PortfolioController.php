<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function show($slug)
    {
        return view('portfolio.show', [
            'product' => Product::where('slug', $slug)
                ->where('is_available', 1)
                ->first()
        ]);
    }
}