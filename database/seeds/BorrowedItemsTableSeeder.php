<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BorrowedItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('borrowed_items')->insert([
            [

            ]
        ]);
    }
}
