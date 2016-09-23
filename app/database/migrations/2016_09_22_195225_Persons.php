<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('person_name',50);
			$table->string('slug');
			$table->string('fullname',50);
			$table->string('bio')->nullable();
			$table->date('birth_date');
			$table->string('birth_place');
			$table->date('death_date');
			$table->string('death_place');
			$table->string('original_poster');
			$table->integer('source_id');
			$table->string('source_type');
			$table->tinyInteger('person_status');			
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
		Schema::drop('persons');
	}

}
