<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Contracts\View\View;
use App\Models\StatesModel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(): View
    {
        $states = StatesModel::all();
        return view('auth.register', ['states' => $states]);
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function loginAction(LoginRequest $r)
    {
        if (Auth::attempt($r->only(['email', 'password']))) {
            return \redirect()->route('home');
        };

        return \redirect()->back();
    }

    public function forgotPassword(): View
    {
        return view('auth.forgot');
    }

    public function saveRegister(RegisterRequest $r): RedirectResponse
    {
        User::create($r->only(['name', 'email', 'password', 'state_id']));
        return \redirect()->route('login');
    }
}
