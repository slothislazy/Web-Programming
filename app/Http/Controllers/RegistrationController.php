<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "username" => "required|max:255|min:3|unique:users",
            "password" => "required|min:5",
            "email" => "required|unique:users",
            "phone_num" => "required|min:6|max:15|unique:users",

        ]);

        $validated["password"] = Hash::make($validated["password"]);

        User::create($validated);

        session()->flash("message", "Registration Successful!");

        return redirect(route('login'));
    }
}
