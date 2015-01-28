<?php

class Casket extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'product_id',
		'name',
		'type',
		'subtype',
		'casket_number',
		'shell',
		'interior',
		'material',
		'manufacturer',
		'casket_group',
		'price',
		'cost',
		'size',
		'notes',
		'panel',
		'vault_size',
		'interior_dimensions',
		'image_1',
		'image_2',
		'image_3',
	];


	protected $table = 'caskets';
}