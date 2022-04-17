<?php
use App\Models\User;
//use Hash;
use Illuminate\Contracts\Session\Session;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function customRegistration(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        dd($request->all());
        $check = $this->create($user);
       // auth()->login($user);
        return redirect()->to('/games');
        // $data = $request->all();
        // $check = $this->create($data);
        // return redirect("dashboard")->withSuccess('You have signed-in');
    }
    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // } 
    
   
}
