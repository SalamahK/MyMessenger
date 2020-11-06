<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropMyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //drop the table
        Schema::dropIfExists('messages');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //create
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }
}
