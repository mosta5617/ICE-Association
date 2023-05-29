<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Downloads extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('members_id');
            $table->string('downloads',255);
            $table->string('file');
            $table->string('fullpath');
            $table->string('active');
            $table->string('date');
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
		Schema::drop('downloads');
	
	}

}
