<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBongahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bongahs', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->bigInteger('owner_id');
            $table->integer('metraj');
            $table->tinyInteger('vam');
            $table->string('sanad');
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bongahs');
    }
}
