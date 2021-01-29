<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => $name = 'Berita',
            'slug' => Str::slug($name),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Artikel',
            'slug' => Str::slug($name),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Gaya Hidup',
            'slug' => Str::slug($name),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Pendidikan',
            'slug' => Str::slug($name),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Seni dan Budaya',
            'slug' => Str::slug($name),
        ]);
    }
}
