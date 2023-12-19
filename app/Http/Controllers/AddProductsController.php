<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;


class AddProductsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function show(): View
    {
        $products= Product::all();
        return view('leads.add_products', compact('products'));
    }
}


