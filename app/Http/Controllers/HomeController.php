<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $products = Product::all();
        $totalItems = auth()->user() ? Cart::where('user_id', auth()->user()->id)->count() : 0;
        return view('index', compact('products', 'totalItems'));
    }
}
