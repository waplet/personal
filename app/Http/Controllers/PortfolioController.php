<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('layouts.full_width', [
            'isReact' => true,
            'css' => [],
            'js' => [
                'js/react/portfolio.js',
            ],
        ]);
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