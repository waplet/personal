<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PortfolioController extends Controller
{
    public function index()
    {
        $products = Product::where('is_available', 1)
            ->get();

        return view('portfolio.index2', [
            'products' => $products
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