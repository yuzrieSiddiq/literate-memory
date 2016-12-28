<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentResponseplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_responseplan', function(Blueprint $table)
        {
            $table->string('proposalID');
            $table->string('description');
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
        Schema::drop('assessment_responseplan');
    }
}
