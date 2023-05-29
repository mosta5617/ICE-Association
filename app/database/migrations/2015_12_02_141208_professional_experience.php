<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfessionalExperience extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
					Schema::create('professional_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('members_id');
            $table->string('professional_experience',10000);
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
		Schema::drop('professional_experience');
		
	}

}
