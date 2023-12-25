<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CreateProfileController extends Controller
{
    public function show(): View
    {
        return view('/create-profile');
    }


    public function store(Request $request): RedirectResponse
    {
        $profile = new Lead();
        $profile->id = $request->id;
        $profile->name = $request->name;
        $profile->second_name = $request->second_name;
        $profile->lastname = $request->lastname;
        $profile->second_lastname = $request->second_lastname;
        $profile->email = $request->email;
        $profile->password = $request->password;
        $profile->phone = $request->phone;
        $profile->save();
            return redirect()->route('create-profile.show')
        ->withSuccess('Se ha registrado satisfactoriamente.');

    }
}
