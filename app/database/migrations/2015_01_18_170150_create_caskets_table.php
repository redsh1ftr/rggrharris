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
			$table->string('casket_number');
			$table->string('casket_group');
			$table->string('shell');	
			$table->string('type');
			$table->string('product_id');
			$table->string('name');
			$table->string('interior_dimensions');
			$table->string('interior');
			$table->string('material');
			$table->string('manufacturer');
			$table->string('sort_group');
			$table->string('price');
			$table->string('cost');
			$table->string('size');
			$table->text('notes');
			$table->string('panel');
			$table->string('vault_size');
			$table->string('image_1');
			$table->string('image_2');
			$table->string('image_3');
			$table->integer('active');
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
