<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // membuat function login di auth controller
    public function login(Request $request)
    {

        return view('login');
    }

    // membuat function login di auth controller
    public function register()
    {
        return view('register');
    }

    //membuat function untuk validasi login
    public function authentication(Request $request)
    {
        //digunakan untuk validasi login
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //cek apakah login valid
        if (Auth::attempt($credentials)) {
            //cek apakah user status bukan active
            if (Auth::user()->status != 'active') {
                //membuat session flash status
                Session::flash('status', 'failed');
                //membuat session flash message untuk ditampilkan ketika status user belum aktif
                Session::flash('message', 'Your account is not active yet. please contact admin!');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('profile');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Login invalid');
        return redirect('login');
    }

    public function logout(Request $request) // membuat function logout di auth controller
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
