<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $remember = $request->has('remember'); // Check if "Remember Me" was checked
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->intended('/dashboard');
        }
    
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
    

    public function logout(Request $request)
    {
        Auth::logout(); // logout the user

        $request->session()->invalidate(); // invalidate the session
        $request->session()->regenerateToken(); // regenerate CSRF token for security

        return redirect()->route('home'); // redirect to login page
    }
}
