<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        else
        if(Auth::user()->usertype == 'admin')
        {
            return redirect()->to('/dashboard');
        }
        else
        {
            return redirect()->to('/index');
        }
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}
