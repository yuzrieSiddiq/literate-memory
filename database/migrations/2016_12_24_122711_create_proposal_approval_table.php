<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalApprovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_approval', function(Blueprint $table)
        {
            $table->string('proposalID');
            $table->bool('isAdvisorApproved');
            $table->string('advisorcomment');
            $table->bool('isSSSCApproved');
            $table->string('SSSCcomment');
            $table->bool('isFacilitiesApproved');
            $table->string('facilitiescomment');
            $table->bool('isITSApproved');
            $table->string('ITScomment');
            $table->bool('isSEAApproved');
            $table->string('SEAcomment');
            $table->bool('isRegistrarApproved');
            $table->string('registrarcomment');
            $table->bool('isFinanceApproved');
            $table->string('financecomment');
            $table->bool('isEGApproved');
            $table->string('EGcomment');
            $table->integer('approvaltrack');
            $table->timestamps();

            $table->foreign('proposalID')->references('proposalID')->on('proposal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposal_approval');
    }
}
