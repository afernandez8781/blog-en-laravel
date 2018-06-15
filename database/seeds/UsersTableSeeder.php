<?php

use App\User;
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
        User::truncate();

        $user = new User;
        $user->name = 'Alfredo Fernandez';
        $user->email = 'alfredo@ceanla.com';
        $user->password = bcrypt('12345');
        $user->save();

    }
}
