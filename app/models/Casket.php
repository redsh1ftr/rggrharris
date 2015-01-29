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
		'sort_group',
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


	static function sortGroups($sort){

		return Casket::where('sort_group', $sort)->get();
	}


	public function GetNext($sort){

		return Casket::where('sort_group', $sort)->where('id', '>', $this->id)->pluck('id');
	}

	public function GetPrev($sort){

		return Casket::where('sort_group', $sort)->where('id', '<', $this->id)->orderBy('id', 'desc')->pluck('id');
	}



}