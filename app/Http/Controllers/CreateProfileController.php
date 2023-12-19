<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CreateProfileController extends Controller
{
    public function show(): View
    {
        return view('create-profile');
    }
}
