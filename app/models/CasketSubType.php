<?php

class CasketSubType extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['type_id', 'name'];

	protected $table = 'casketsubtypes';

}