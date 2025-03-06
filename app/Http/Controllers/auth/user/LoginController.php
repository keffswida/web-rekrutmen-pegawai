<?php

namespace App\Http\Controllers\auth\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.auth.user-login');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::guard('pelamar')->attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/');
    //         // return redirect('/');
    //     }

    //     return back()->with('error', 'Login Gagal!');
    // }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Debugging: Check if the user is authenticated
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Login successful',
            //     'user' => Auth::guard('pelamar')->user()
            // ]);

            return redirect()->intended('/career');
        }

        // return response()->json([
        //     'success' => false,
        //     'message' => 'Login failed. Check email/password.'
        // ]);
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('');
    }
}
