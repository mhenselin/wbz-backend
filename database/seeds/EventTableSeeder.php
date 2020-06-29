<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Urlaub Ilona',
            'description' => 'Ilone Riedel im Urlaub',
            'start' => '2020-06-24 00:00:00',
            'end' => '2020-06-26 00:00:00',
            'user_id' => 2,
        ]);

    }
}
