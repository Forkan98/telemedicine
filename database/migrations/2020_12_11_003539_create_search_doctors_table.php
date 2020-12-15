<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drName_id');
            $table->string('contact');
            $table->string('department');
            $table->string('fee');
            $table->string('yourName');
            $table->string('mobile');
            $table->string('email');
            $table->string('gender');
            $table->string('symptoms');
            $table->string('date');
            $table->string('time');
            $table->string('payment');
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
        Schema::dropIfExists('search_doctors');
    }
}
