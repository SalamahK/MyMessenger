<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_from');
            $table->integer('user_id_to');
            $table->string('subject');
            $table->string('body');
            $table->boolean('read')->nullable();
            $table->boolean('deleted')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texts');
    }
}
