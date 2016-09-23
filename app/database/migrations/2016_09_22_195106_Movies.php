<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',50)->unique();
			$table->string('slug');
			$table->string('tagline');
			$table->string('description')->nullable();
			$table->string('genres');
			$table->integer('released_year');
			$table->date('released_date');
			$table->string('type');
			$table->string('runtime');
			$table->string('rating');
			$table->string('votes');
			$table->string('rated');
			$table->string('original_poster');  
			$table->integer('source_id');
			$table->string('source_type'); 
			$table->tinyInteger('movie_status');
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
		Schema::drop('movies');
	}

}
