<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AssessmentEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assessment_event')->insert([
            [
                'proposalID' => 'SJLC001',
                'description'=> 'Work in progress',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
