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
                'proposalID' => 'SJLC001',
                'itemID'     => 'FAC01',
                'borrowedcount' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'proposalID' => 'SJLC001',
                'itemID'     => 'FAC02',
                'borrowedcount' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
