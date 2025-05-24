<?php

// app/Http/Controllers/Admin/AdminLoginController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function loginAsAdmin()
    {
        $adminCredentials = [
            'email' => 'admin@example.com',
            'password' => 'password123',
        ];

        if (Auth::attempt($adminCredentials)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.admin-login');
    }
}
