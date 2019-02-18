<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
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
          $table->string('profile_link')->default('default_link');
          $table->string('profile_img')->default('default-profile.png');
          $table->string('telephone_number')->default('06');
          $table->string('specialisation');
          $table->string('home_address');
          $table->string('work_location');
          $table->integer('digit')->default('0');
          $table->integer('likes')->default('0');
          $table->integer('comments')->default('0');
          $table->ipAddress('ip_address');
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
        Schema::dropIfExists('members');
    }
}
