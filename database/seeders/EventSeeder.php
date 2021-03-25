<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2000', '01', '01'),
            'price' => '1500',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2001', '02', '01'),
            'price' => '2000',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2002', '03', '01'),
            'price' => '2500',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2003', '04', '01'),
            'price' => '3000',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2004', '05', '01'),
            'price' => '3500',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2005', '06', '01'),
            'price' => '4000',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2006', '07', '01'),
            'price' => '4500',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2007', '08', '01'),
            'price' => '5000',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2008', '09', '01'),
            'price' => '5500',
        ]);
        DB::table('events')->insert([
            'name' => 'Event - '.Str::random(4),
            'location_id' => rand(1,10),
            'date' => Carbon::create('2009', '10', '01'),
            'price' => '6000',
        ]);

    }
}
