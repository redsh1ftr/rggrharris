<?php

class CasketType extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'name',
	];

	protected $table = 'casketTypes';


}