<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\DB;

class AddProductsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View|Application|Factory
    {
        $products = new Product();
        $products = DB::table('products')->get();
        return view('leads.add_products', compact('products'));
    }
}


