<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $credentials=$request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        
        if (Auth::attempt($credentials))
         {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }
    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('/');
    }
}
