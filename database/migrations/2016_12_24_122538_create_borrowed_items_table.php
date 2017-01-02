<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed_items', function (Blueprint $table)
        {
            $table->string('proposalID');
            $table->string('itemID');
            $table->integer('borrowedcount');
            $table->timestamps();

            $table->foreign('itemID')->references('itemID')->on('requestable_items')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('borrowed_items');
    }
}
