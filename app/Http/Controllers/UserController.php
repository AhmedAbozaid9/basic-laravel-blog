<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => "required|string",
            'email' => "required|string|email|unique:users",
            'password' => "required|string",
        ]);
        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        auth()->login($user);
        return redirect("/");
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => "required|string|email",
            'password' => "required|string",
        ]);
        if (!auth()->attempt($fields)) {
            $request->session()->regenerate();
        }
        return redirect("/");
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect("/");
    }
}
