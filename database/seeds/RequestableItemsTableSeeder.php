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
                'itemID'     => 'FAC01',
                'name'       => 'Extension Wire (Short)',
                'description'=> '5M-long wired 4-socket extension',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'itemID'     => 'FAC02',
                'name'       => 'Extension Wire (Long)',
                'description'=> '15M-long wired 4-socket extension',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
