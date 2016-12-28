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
        Schema::create('proposal', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('proposalID')->unique();
            $table->string('clubID');
            $table->string('status');
            $table->string('lastreviewedby');
            $table->boolean('isEditable');
            $table->boolean('isEquipmentRequested');   // check if need approval from - facilities/its
            $table->boolean('isFundRequested');        // check if need approval from - finance
            $table->boolean('isExecGroupInvolved');    // check if need approval from - executive group
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
        Schema::drop('proposal');
    }
}
