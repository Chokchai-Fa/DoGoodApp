<?php

use Illuminate\Database\Seeder;
use League\CommonMark\Node\Node;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $user = new \App\User();
        $user->name = 'Sirada Kittipaisarnkul';
        $user->email = 'kwanchai@gmail.com';
        $user->password = Hash::make('Phukao98765');
        $user->save();


    }
}

