<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AddProductsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(): View
    {
        $products = Product::all();

        return view('leads.add_products', compact('products'));
    }

    public function store(Request $request): View
    {
        $productIds = $request->except('_token');
        $products = Product::findMany($productIds);

        return view('leads.products_select', compact('products'));
    }
}
