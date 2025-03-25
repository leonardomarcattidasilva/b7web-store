<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Contracts\View\View;
use App\Models\StatesModel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        return \redirect()->back()->with('message', 'Usuário não identificado');
    }

    public function forgotPassword(): View
    {
        return view('auth.forgot');
    }

    public function saveRegister(RegisterRequest $r): RedirectResponse
    {
        $userData = $r->only(['name', 'email', 'password', 'state_id']);
        $userData['password'] = Hash::make($userData['password']);
        return \redirect()->route('login');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return \redirect()->route('login');
    }

    public function update(RegisterRequest $r)
    {

        $userData = $r->only(['name', 'email', 'password', 'state_id']);
        $userData['password'] = Hash::make($userData['password']);
        User::where('id', Auth::user()->id)->update($userData);
        return \redirect()->back()->with('message', 'Usuário atualizado');
    }
}
