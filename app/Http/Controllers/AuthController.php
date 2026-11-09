<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('admin.index');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
           'login'=>'required|string',
            'password'=>'required|string'
        ]);
        $user = User::query()->where('email', $data['login'])->orWhere('phone', $data['login'])->first();
        if ($user && Hash::check($data['password'], $user->password)){
            if ($user->role === 'moderator') {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->route('admin.index');
            }
        }
        return back()->withErrors([
           'login'=>'Qate'
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.page');
    }
}
