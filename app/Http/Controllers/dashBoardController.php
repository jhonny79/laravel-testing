<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio() {
        $user = Auth::user();
        return view('web.inicio', compact('user'));
        
    }
}
