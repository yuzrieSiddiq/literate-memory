<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal', function(Blueprint $table) {
            $table->string('proposalID');
            $table->string('clubID');
            $table->string('status');
            $table->string('lastreviewedby');
            $table->bool('isEditable');
            $table->bool('isEquipmentRequested');   // check if need approval from - facilities/its
            $table->bool('isFundRequested');        // check if need approval from - finance
            $table->bool('isExecGroupInvolved');    // check if need approval from - executive group
            $table->timestamps();

            $table->foreign('clubID')->references('clubID')->on('clubs')
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
        Schema::drop('proposal')
    }
}
