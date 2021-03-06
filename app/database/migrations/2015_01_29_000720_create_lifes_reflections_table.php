<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLifesReflectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lifes_reflections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('image_1');
			$table->string('image_2');
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
		Schema::drop('lifes_reflections');
	}

}
