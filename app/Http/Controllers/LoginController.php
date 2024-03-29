<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('authenticat.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        if (auth()->user()->level === 'admin') {
            return redirect('/dashboard');
        } else {
             return redirect('/');
        }
    }


        return back()->with('error','Login Gagal');
    }
}
