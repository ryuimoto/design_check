<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuestionController extends Controller
{
    public function index(){
        return view('user.dashboard.questions');
    }

    public function detail(){
        return view('user.dashboard.question_detail');
    }
}
