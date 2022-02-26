<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('user.dashboard.top');
    }

    public function logout()
    {
        $this->middleware('user')->except('logout');
        return redirect()->route('top');
    }
}
