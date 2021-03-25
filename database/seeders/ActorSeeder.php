<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);
        DB::table('actors')->insert([
            'name' => Str::random(5),
        ]);



    }
}
