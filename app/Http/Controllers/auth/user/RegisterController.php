<?php

namespace App\Http\Controllers\auth\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.auth.user-register');
    }

    public function register(Request $request)
    {
        $validatedUser = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            // 'email' => 'required|email:dns|unique:users',
            'email' => 'required',
            'password' => 'required|min:5|max:255',
        ]);

        $validatedUser['password'] = Hash::make($validatedUser['password']);

        $user = User::create($validatedUser);

        Auth::login($user);

        return redirect()->route('login.index')->with('success', 'Registrasi Berhasil! Harap Login untuk melanjutkan');
    }
}
