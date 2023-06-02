<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class authController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegistrationForm()
    {
        return view('regist');
    }

    public function login(Request $request){
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();
            // dd(Auth::check());
            return redirect()->intended('');
        }

        return back()->with([
            'error' => 'Username atau Password Salah'
        ]);
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['level_role'] = 1;

        $user = User::create($validatedData);

        if ($user) {
            return redirect()->route('login')->with('success', 'Silahkan Login Kembali');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
