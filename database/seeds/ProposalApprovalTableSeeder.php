<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProposalApprovalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proposal_approval')->insert([
            [
                'proposalID'            => 'SJLC001',
                'isAdvisorApproved'     => 'false',
                'advisorcomment'        => '-',
                'isSSSCApproved'        => 'false',
                'SSSCcomment'           => '-',
                'isFacilitiesApproved'  => 'false',
                'facilitiescomment'     => '-',
                'isITSApproved'         => 'false',
                'ITScomment'            => '-',
                'isSEAApproved'         => 'false',
                'SEAcomment'            => '-',
                'isRegistrarApproved'   => 'false',
                'registrarcomment'      => '-',
                'isFinanceApproved'     => 'false',
                'financecomment'        => '-',
                'isEGApproved'          => 'false',
                'EGcomment'             => '-',
                'approvaltrack'         => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
