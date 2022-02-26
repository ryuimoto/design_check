<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            dump("user_no_$i");
            $name = "user$i";
            $email = "test$i@test.com";
            $random_password = (string) Str::uuid();

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make('qqq111'),
                'tfa_token' => now()->addDays(2),
                'tfa_expiration' => now()->addDays(2),
            ]);
        }
    }
}
