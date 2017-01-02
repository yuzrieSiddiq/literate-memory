<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProposalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proposal')->insert([
            [
                'proposalID'            => 'SJLC001',
                'clubID'                => 'SJLC',
                'status'                => 'pending',
                'lastreviewedby'        => '-',
                'isEditable'            => 'false',
                'isEquipmentRequested'  => 'false',
                'isFundRequested'       => 'false',
                'isExecGroupInvolved'   => 'false',
                'created_at'            => Carbon::now(),
                'updated_at'            => Carbon::now(),
            ]
        ]);
    }
}
