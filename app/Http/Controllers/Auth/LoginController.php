<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials=$request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        
        if (Auth::attempt($credentials))
         {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("/login")->withSuccess('Login details are not valid');
    }
    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('/login');
    }
}
