<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function(Blueprint $table)
        {
            $table->string('clubID');
            $table->string('clubname');
            $table->integer('receivedfunds');
            $table->timestamps();

            $table->foreign('clubID')->references('username')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clubs');
    }
}
