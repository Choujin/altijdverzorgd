<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('members', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('surname');
        $table->string('gender');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->string('profile_link');
        $table->string('src_img');
        $table->string('specialisation');
        $table->string('work_location');
        $table->integer('digit');
        $table->integer('likes');
        $table->integer('comments');
        $table->rememberToken();
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
      Schema::dropIfExists('member_lists');
    }
}
