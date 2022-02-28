<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();

        return view('user.dashboard.profile')->with([
            'user' => $user,
        ]);
    }

    public function edit(Request $request){
        $this->editValidate($request);
        $user = Auth::user();
        $user->name = $request->name;
        $user->password =  Hash::make($request->password);
        $user->save();

        return back();
    }

    public function editValidate($request){
        $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|confirmed',
        ]);
    }
}
