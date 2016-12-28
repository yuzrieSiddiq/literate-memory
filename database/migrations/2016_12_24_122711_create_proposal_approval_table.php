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
            $table->boolean('isAdvisorApproved');
            $table->string('advisorcomment');
            $table->boolean('isSSSCApproved');
            $table->string('SSSCcomment');
            $table->boolean('isFacilitiesApproved');
            $table->string('facilitiescomment');
            $table->boolean('isITSApproved');
            $table->string('ITScomment');
            $table->boolean('isSEAApproved');
            $table->string('SEAcomment');
            $table->boolean('isRegistrarApproved');
            $table->string('registrarcomment');
            $table->boolean('isFinanceApproved');
            $table->string('financecomment');
            $table->boolean('isEGApproved');
            $table->string('EGcomment');
            $table->integer('approvaltrack');
            $table->timestamps();

            $table->foreign('proposalID')->references('proposalID')->on('proposal')
            ->onUpdate('cascade')->onDelete('cascade');
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
