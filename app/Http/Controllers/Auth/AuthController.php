<?php

namespace App\Http\Controllers\Auth;

use App\Enums\ActivationStatus;
use App\Exceptions\NotFoundException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('dashboard.pages.auth.login');
    }

    public function signIn(Request $request)
    {
        try {
            if (!auth()->attempt(['email' => $request->identifier, 'password' => $request->password])) {
                throw new \Exception(__('invalid email or password'));
            }

            $toast = [
                'type' => 'success',
                'title' => 'success',
                'message' => trans('app.auth.login_successfully')
            ];
            return to_route('dashboard')->with('toast', $toast);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }
}
