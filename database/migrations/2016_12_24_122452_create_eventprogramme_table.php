<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventprogrammeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventprogramme', function(Blueprint $table)
        {
            $table->string('proposalID');
            $table->date('data');
            $table->date('time');
            $table->text('programme');
            $table->string('venue');
            $table->timestamps();

            // $table->foreign('proposalID')->references('proposalID')->on('proposal')
            // ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eventprogramme');
    }
}
