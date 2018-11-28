<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'José Baptista',
            'email' => 'jbapti01@cantv.com.ve',
            'password' => bcrypt('qwerty'),
        ]);
    }
}
