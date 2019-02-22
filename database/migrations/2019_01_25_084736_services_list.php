<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicesList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('services', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('city');
        $table->string('gender');
        $table->string('category');
        $table->string('description');
        $table->string('tags');
        $table->string('src_img');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
