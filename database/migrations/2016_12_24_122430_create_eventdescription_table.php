<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventdescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventdescription', function(Blueprint $table)
        {
            $table->string('proposalID');
            $table->string('title');
            $table->string('objective');
            $table->date('date');
            $table->date('time');
            $table->string('venue');
            $table->integer('estimatedattendance');
            $table->string('organisername');
            $table->string('organisercontact');
            $table->string('committeename');
            $table->string('programmeID')->unique();
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
        Schema::drop('eventdescription');
    }
}
