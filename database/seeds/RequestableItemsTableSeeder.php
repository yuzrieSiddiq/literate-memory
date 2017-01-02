<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RequestableItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requestable_items')->insert([
            [

            ]
        ]);
    }
}
