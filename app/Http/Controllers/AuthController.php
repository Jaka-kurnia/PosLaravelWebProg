<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')
                ->with('success', 'Selamat datang! Anda berhasil masuk ke sistem.');
        }

        return Redirect::back()
            ->withErrors(['email' => 'Email atau password salah'])
            ->withInput();
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // PERBAIKAN: Jangan arahkan ke '/proseslogin' (karena itu route POST)
        // Arahkan ke '/' atau route('login') yang menggunakan metode GET
        return redirect('/')->with('success', 'Berhasil logout!');
    }
}
