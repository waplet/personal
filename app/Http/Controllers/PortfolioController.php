<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function getIndex()
    {
        return view('portfolio.index');
    }
}