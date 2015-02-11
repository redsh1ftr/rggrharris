<?php

class CasketTypeIndex extends \Eloquent {

	// Add your validation rules here
	public static $rules = [ 
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['casket_id', 'subtype_id'];

	protected $table = 'caskettypeindices';


	public function GetNext($sort){

		return CasketTypeIndex::where('subtype_id', $sort)->where('id', '>', $this->id)->pluck('id');
	}

	public function GetPrev($sort){

		return CasketTypeIndex::where('subtype_id', $sort)->where('id', '<', $this->id)->orderBy('id', 'desc')->pluck('id');
	}
}