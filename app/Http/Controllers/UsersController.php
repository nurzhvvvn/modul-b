<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $info = User::all();
        $user = Auth::user();
        return view('admin.users', compact('user', 'info'));
    }
}
