<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            "title" => "Register"
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:256',
            // 'email' => 'required|email:dns',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect('/login')->with('message', 'berhasil registrasi, silahkan login');
        // dd($request);
        // return request()->all();
    }
}
