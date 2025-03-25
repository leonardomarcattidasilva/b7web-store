<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\StatesModel;

class PagesController extends Controller
{

    public function getUserData(): array
    {
        $user = Auth::user();
        $name = \explode(' ', $user->name);
        return ['name' => $name, 'user' => $user];
    }

    public function index(): View
    {
        $data = $this->getUserData();
        return view('home', ['name' => $data['name'][0]]);
    }

    public function myProfile(): View
    {
        $data = $this->getUserData();
        $states = StatesModel::all();
        return view('myProfile', ['states' => $states, 'user' => $data['user'], 'name' => $data['name'][0]]);
    }
}
