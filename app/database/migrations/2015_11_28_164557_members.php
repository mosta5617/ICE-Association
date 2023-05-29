<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Members extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('password_temp', 60);
            $table->string('mobile', 60);
            $table->string('designation',60);
            $table->string('duty', 60);
            $table->string('facebook', 255);
            $table->string('linkedin', 255);
            $table->string('website', 255);
            $table->string('file', 255);
            $table->string('fullpath', 255);
            $table->string('session', 255);
            $table->string('batch', 255);
            $table->string('online', 60);
            $table->string('code', 60);
            $table->string('active', 60);
            $table->string('enroll', 60);
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
		Schema::drop('members');
	}

}
