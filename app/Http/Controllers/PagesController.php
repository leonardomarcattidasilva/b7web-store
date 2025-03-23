<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(): View
    {
        $user = Auth::user()->name;
        $name = \explode(' ', $user);
        return view('home', ['name' => $name[0]]);
    }
}
