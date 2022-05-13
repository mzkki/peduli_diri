<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:16|max:16|unique:users',
            'fullname' => 'required|string|max:255',
        ]);

        User::Create($validatedData);

        return redirect('/login')->with('success', 'Berhasil mendaftar, silahkan login');
    }
}
