<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
          'name'     =>    'John Smith',
          'email'    =>    'john_smith@gmail.com',
          'password' =>     Hash::make('password'),
          'remember_token' => str_random(10),
        ]);
    }
}
