<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class AddProductsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function show(): View
    {
        $products = DB::table('products')->get();
        return view('leads.add_products', compact('products'));
    }
}


