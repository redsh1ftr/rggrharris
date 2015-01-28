<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caskets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_id');
			$table->string('name');
			$table->string('type');
			$table->string('subtype');
			$table->string('casket_number');
			$table->string('shell');
			$table->string('interior');
			$table->string('material');
			$table->string('manufacturer');
			$table->string('casket_group');
			$table->string('price');
			$table->string('cost');
			$table->string('size');
			$table->text('notes');
			$table->string('panel');
			$table->string('vault_size');
			$table->string('interior_dimensions');
			$table->string('image_1');
			$table->string('image_2');
			$table->string('image_3');
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
		Schema::drop('caskets');
	}

}
