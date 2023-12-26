<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

    public function store(Request $request): RedirectResponse|View
    {
        $products_ids = $request->all();
        array_shift($products_ids);
        $products = collect([]);
        foreach ($products_ids as $id) {
            $product = Product::find($id);
            $products->push($product);
        }

        return view('leads.products_select', compact('products'));
    }
}
