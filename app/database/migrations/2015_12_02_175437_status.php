<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Status extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('members_id');
            $table->string('educational_background',1000);
            $table->string('professional_experience',1000);
            $table->string('field_of_interest',1000);
            $table->string('publications',1000);
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
		Schema::drop('status');

	}

}
