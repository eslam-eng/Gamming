<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('dashboard.pages.auth.login');
    }

    public function singin(Request $request)
    {
        dd('test');
    }
}
