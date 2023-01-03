<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $user = new User();
        $user->name = 'Jhonny Carpenito';
        $user->email = 'jhonny@example.com';
        $user->password = bcrypt('secret');
        $user->save();

    }
}
