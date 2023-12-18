<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class AddProductsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View|Application|Factory
    {
        return view('leads.add_products');
    }
}


