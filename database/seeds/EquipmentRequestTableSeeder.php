<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EquipmentRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_requests')->insert([
            [

            ]
        ]);
    }
}
