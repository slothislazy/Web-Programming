<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "username" => "required|max:255|min:3",
            "password" => "required",
            "email" => "required",
            "phone_num" => "required|min:5|max:10",

        ]);
        return $validated;
    }
}
