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

    public function indexCreate(){
        return view('user.dashboard.create');
    }

    public function postCreate(Request $request){
        $this->postValidate($request);
        $user = Auth::user();
        
        $file_name = $this->imgCreate($request);
        Question::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'content' => $request->content,
            'file_path' => $file_name,
        ]);

        return redirect()->route('user.questions');
    }

    public function postValidate($request){
        $request->validate([
            'file_path' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'required|max:255',
            'content' => 'required|max:800',
        ]);
    }

    public function imgCreate($request){
        if(!is_null($request->file('file_path'))){
            $file_name = str_random(10).".".$request->file('file_path')->getClientOriginalExtension();

            $request->file('file_path')->storeAs('',"public/file_path/$file_name");
        }

    }
}
