<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventdescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventdescription')->insert([
            [
                'proposalID' => 'SJLC001',
                'title'      => 'SJLC Raindrop Cake Workshop',
                'objective'  => 'To create awareness of Japanese unique cuisine',
                'date'       => '15-JAN-2017',
                'time'       => '10.00AM - 12.30PM',
                'venue'      => 'G001 Auditorium',
                'estimatedattendance' => '20 People',
                'organisername'       => 'Mohamad Yuzrie Bin Khalid',
                'organisercontact'    => '012-3456789',
                'committeename'       => 'Isaac Sia Sheng Ren',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
