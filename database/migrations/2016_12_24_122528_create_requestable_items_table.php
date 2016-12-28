<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestableItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestable_items', function (Blueprint $table)
        {
            $table->string('itemID')->unique();
            $table->string('name');
            $table->string('description');
            $table->timestamps();

            $table->primary('itemID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requestable_items');
    }
}
