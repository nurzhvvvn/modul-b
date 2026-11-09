<?php

namespace App\Http\Controllers;

use App\Models\adverts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertsController extends Controller
{
    public function index()
    {
        $adinfo = adverts::all();
        $user = Auth::user();
        return view('admin.adverts', compact('user','adinfo'));
    }
}
