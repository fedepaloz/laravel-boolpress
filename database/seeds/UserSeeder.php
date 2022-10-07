<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'fedepaloz';
        $user->email = 'fedepaloz@gmail.com';
        $user->password = bcrypt('federico');
        $user->save();
    }
}
