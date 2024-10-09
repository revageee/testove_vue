<?php

namespace App\Http\Controllers;

abstract class Controller
{
    use App\Models\Product;

    public function index()
    {
        return Product::all();
    }

}
