<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function create()
    {
        return view("register");
    }

    public function store(Request $request)
    {

        $request->validate([
            "name" => ["required", "string", "min:3"],
            "email" => ["required", "email", "unique:users"],
            "password" => ["required", "string", "min:8", "confirmed"],
            "password_confirmation" => ["required"],
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return redirect("user");
    }
}
