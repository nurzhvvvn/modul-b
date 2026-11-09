<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $cat = categories::all();
        return view('admin.categories', compact('user', 'cat'));
    }

}
