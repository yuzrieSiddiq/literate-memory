<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_event', function(Blueprint $table)
        {
            $table->string('assessmentID');
            $table->string('description');
            $table->timestamps();

            $table->foreign('assessmentID')->references('assessmentID')->on('assessment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assessment_event');
    }
}
