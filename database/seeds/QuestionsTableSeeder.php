<?php

use Illuminate\Database\Seeder;

use App\Question;
use App\User;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            dump("question_no_$i");

            $user = User::inRandomOrder()->first();
            $rand_int = mt_rand(0, 5);
            
            Question::create([
                'user_id' => $user->id,
                'title' => config("word.questions.title.$rand_int"),
                'content' => config("word.questions.content.$rand_int"),
                'good' => $rand_int,
                'pv' => $rand_int,
            ]);
        }
    }
}
