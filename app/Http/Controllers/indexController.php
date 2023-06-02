<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index()
    {
        $konsers = Konser::all();
        return view('index', compact('konsers'));
    }
}
