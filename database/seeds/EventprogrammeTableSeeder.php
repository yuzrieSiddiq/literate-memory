<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventprogrammeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventprogramme')->insert([
            [
                'proposalID' => 'SJLC001',
                'date'       => '15-JAN-2017',
                'time'       => '10.00AM - 10.10AM',
                'programme'  => 'Event opening introduction',
                'venue'      => 'G001 Auditorium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'proposalID' => 'SJLC001',
                'date'       => '15-JAN-2017',
                'time'       => '10.10AM - 10.30AM',
                'programme'  => 'Workshop preparation',
                'venue'      => 'G001 Auditorium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'proposalID' => 'SJLC001',
                'date'       => '15-JAN-2017',
                'time'       => '10.30AM - 11.30AM',
                'programme'  => 'First session - standard raindrop cake preparation',
                'venue'      => 'G001 Auditorium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'proposalID' => 'SJLC001',
                'date'       => '15-JAN-2017',
                'time'       => '11.30AM - 12.20PM',
                'programme'  => 'Second session - creative creation',
                'venue'      => 'G001 Auditorium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'proposalID' => 'SJLC001',
                'date'       => '15-JAN-2017',
                'time'       => '12.20PM - 12.30PM',
                'programme'  => 'Event closing',
                'venue'      => 'G001 Auditorium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'proposalID' => 'SJLC001',
                'date'       => '15-JAN-2017',
                'time'       => '12.30PM - 1.00PM',
                'programme'  => 'Workshop preparation',
                'venue'      => 'G001 Auditorium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
