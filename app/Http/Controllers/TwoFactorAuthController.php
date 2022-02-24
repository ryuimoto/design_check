<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mail\TwoFactorAuthPassword;
use Illuminate\Support\Facades\Hash;

use App\User;

class TwoFactorAuthController extends Controller
{
    // public function first_auth(Request $request) {  // １段階目の認証
    //     $credentials = $request->only('email', 'password');

    //     if(\Auth::validate($credentials)) {

    //         $random_password = '';

    //         for($i = 0 ; $i < 4 ; $i++) {

    //             $random_password .= strval(rand(0, 9));

    //         }

    //         $user = \App\User::where('email', $request->email)->first();
    //         $user->tfa_token = $random_password;            // 4桁のランダムな数字
    //         $user->tfa_expiration = now()->addMinutes(10);  // 10分間だけ有効
    //         $user->save();

    //         // メール送信
    //         \Mail::to($user)->send(new TwoFactorAuthPassword($random_password));

    //         return [
    //             'result' => true,
    //             'user_id' => $user->id
    //         ];

    //     }

    //     return ['result' => false];

    // }

    public function firstAuth($request,$random_password){
        $user = User::create([
            'email' => $request['email'],
            'tfa_token' => $random_password,
            'tfa_expiration' => now()->addDays(2),
            'password'=>  Hash::make($random_password),
        ]);

        \Mail::to($user)->send(new TwoFactorAuthPassword($random_password));

        return [
            'result' => true,
            'user_id' => $user->id
        ];
    }


    // public function second_auth(Request $request) {  // ２段階目の認証
    //     $result = false;

    //     if($request->filled('tfa_token', 'user_id')) {

    //         $user = \App\User::find($request->user_id);
    //         $expiration = new Carbon($user->tfa_expiration);

    //         if($user->tfa_token === $request->tfa_token && $expiration > now()) {

    //             $user->tfa_token = null;
    //             $user->tfa_expiration = null;
    //             $user->save();

    //             \Auth::login($user);    // 自動ログイン
    //             $result = true;
    //         }
    //     }

    //     return ['result' => $result];

    // }

    public function secondRegister(){
        return 23242345;
    }

}
