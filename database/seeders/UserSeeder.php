<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Matius Rimbe',
            'type_user' => 1,
            'email' => 'matius@ms.com',
            'password' => bcrypt('matius@ms.com'),
            'image' => 'assets/img/avatar/avatar-1.png',
            'bio' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        ]);
        DB::table('users')->insert([
            'name' => 'Septi Rosma',
            'type_user' => 0,
            'email' => 'septi@ms.com',
            'password' => bcrypt('septi@ms.com'),
            'image' => 'assets/img/avatar/avatar-1.png',
            'bio' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        ]);
    }
}
