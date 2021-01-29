<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => $name = 'unm',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'pendidikan',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'indonesia',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'sulsel',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'sulbar',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'makassar',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'mamasa',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'sehat',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'lambanan',
            'slug' => Str::slug($name),
        ]);
        DB::table('tags')->insert([
            'name' => $name = 'viral',
            'slug' => Str::slug($name),
        ]);
    }
}
