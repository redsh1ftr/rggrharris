<?php

class CasketTypeIndex extends \Eloquent {

	// Add your validation rules here
	public static $rules = [ 
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['casket_id', 'subtype_id'];

	protected $table = 'caskettypeindices';
}