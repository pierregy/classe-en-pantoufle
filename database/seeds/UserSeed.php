<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('administrator');
        $user2 = User::create([
            'name' => 'PierreG',
            'email' => 'pgyejacquot@gmail.com',
            'password' => bcrypt('5$Eloise')
        ]);
        $user->assignRole('user');

    }
}
