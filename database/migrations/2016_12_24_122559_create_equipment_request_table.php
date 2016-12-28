<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_requests', function(Blueprint $table)
        {
            $table->string('proposalID');
            $table->string('requestID');
            $table->timestamps();

            // $table->foreign('proposalID')->references('proposalID')->on('proposal')
            // ->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('requestID')->references('requestID')->on('borrowed_items')
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
        Schema::drop('equipment_requests');
    }
}
