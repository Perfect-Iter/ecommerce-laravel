<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\CartController;


class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->get();

        return view('index')->with('products', $products);
    }

   
}
