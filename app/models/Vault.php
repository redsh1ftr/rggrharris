<?php

class Vault extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'liner', 'description', 'price', 'image_1', 'image_2', 'image_3'];

	protected $table = 'vaults';


	public function GetNext($sort){

		return Vault::where('id', '>', $this->id)->pluck('id');
	}

	public function GetPrev($sort){

		return Casket::where('id', '<', $this->id)->orderBy('id', 'desc')->pluck('id');
	}

}