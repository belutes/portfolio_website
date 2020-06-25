<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = new \App\Users([
            "firstName" => "Brian", 
            "lastName" => "Lutes",
            "username" => "belutes",
            "email" => "codinglife1@gmail.com",
            "password" => Hash::make("ILoveCoding2"),
            // "password" => "ILoveCoding2",
            "isAdmin" => true,
            "isLoggedIn" => false
        ]);
        $users->save();
    }
}
