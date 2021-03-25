<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Event_ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_actors')->insert([
            'event_id' => '1',
            'actor_id' => '1'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '2',
            'actor_id' => '2'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '3',
            'actor_id' => '3'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '4',
            'actor_id' => '4'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '5',
            'actor_id' => '5'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '6',
            'actor_id' => '6'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '7',
            'actor_id' => '7'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '8',
            'actor_id' => '8'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '9',
            'actor_id' => '9'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '1',
            'actor_id' => '2'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '3',
            'actor_id' => '4'
        ]);
        DB::table('event_actors')->insert([
            'event_id' => '4',
            'actor_id' => '5'
        ]);
    }
}
