<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(auth()->check()) {
            return view('admin.dashboard');
        } else {
            return redirect()->route('login');
        }
    }
}
