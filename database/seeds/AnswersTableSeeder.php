<?php

use Illuminate\Database\Seeder;

use App\Answer;
use App\Question;
use App\User;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            dump("answer_no_$i");
            $question = Question::inRandomOrder()->first();
            $user = User::where('id','<>',$question->user->id)->first();
            $rand_int = mt_rand(0, 5);
            
            Answer::create([
                'user_id' => $user->id,
                'question_id' => $question->id,
                'content' => config("word.answers.content.$rand_int"),
            ]);
        }
    }
}
