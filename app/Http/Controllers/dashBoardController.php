<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection as Collection;

class dashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio() {
        $user = Auth::user();
        $user = Collection::make($user);
        $user->except('email_verified_at', 'created_at' , 'updated_at');
        return view('web.inicio', compact('user'));
        
    }

    public function user (){
        $user = Auth::user();
        $user = Collection::make($user);
        $user = $user->except('email_verified_at', 'created_at' , 'updated_at');

        return response()->json($user);
    }
}
