<?php

namespace app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class PortfolioController extends Controller
{
    public function index()
    {
        $products = Product::where('is_available', 1)
            ->paginate(20);

        return response()->json($products);
    }
}