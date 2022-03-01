<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Question;
use App\Answer;


class QuestionController extends Controller
{
    public function index(){
        $user = Auth::user();
        $questions = Question::where('user_id',$user->id)->get();

        return view('user.dashboard.questions')->with([
            'user' => $user,
            'questions' => $questions,
        ]);
    }

    public function detail(Question $question){
        $answers = Answer::where('question_id',$question->id)->get();

        return view('user.dashboard.question_detail')->with([
            'question' => $question,
            'answers' => $answers
        ]);
    }
}
