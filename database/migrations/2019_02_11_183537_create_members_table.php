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
          $table->string('birthday');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->string('profile_img')->default('images/workers/default-profile.png');
          $table->string('telephone_number')->default('06');
          $table->string('profession');
          $table->string('address');
          $table->string('city');
          $table->string('postel_code');
          $table->string('country');
          $table->string('work_location');
          $table->integer('digit')->default('0');
          $table->integer('likes')->default('0');
          $table->integer('comments')->default('0');
          $table->string('about_me')->default('Tell us about your self');
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
