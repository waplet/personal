<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Managers\ProductImageManager;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }

    public function store(Request $request)
    {
        $productImageManager = new ProductImageManager();
        $productImage = $productImageManager->save($request->file('image'), 1);

        dump($productImage);
    }
}