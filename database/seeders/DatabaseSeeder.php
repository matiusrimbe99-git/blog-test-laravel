<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::factory(50)->create();
        \App\Models\User::factory(18)->create();
        \App\Models\Category::factory(7)->create();
        \App\Models\Tag::factory(12)->create();
        $this->call(UserSeeder::class);
        
    }
}
