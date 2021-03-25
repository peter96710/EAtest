<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' =>'Budapest - '.Str::random(3),
        ]);
        DB::table('locations')->insert([
            'name' => 'Budapest - '.Str::random(3),
        ]);

    }
}
