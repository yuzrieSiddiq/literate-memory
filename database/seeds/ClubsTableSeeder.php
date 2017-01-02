<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            [
                'clubID' => 'SJLC',
                'clubname' => 'Swinburne Japanese Language Club',
                'receivedfunds' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
