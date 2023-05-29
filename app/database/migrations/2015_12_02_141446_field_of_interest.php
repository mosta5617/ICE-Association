<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldOfInterest extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('field_of_interest', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('members_id');
            $table->string('field_of_interest',10000);
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
		Schema::drop('field_of_interest');
	
	}

}
