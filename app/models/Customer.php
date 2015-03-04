<?php

class Customer extends Eloquent {

	// Validation rules for store
	public static $rulesForStore = [
		// 'title' => 'required'
		'name' => 'required',
		'email' => 'required|email|unique:customers',
		'phoneNumber' => 'required|regex:/^\+?[0-9]{3}-?[0-9]{6,12}$/',
		'comments' => 'required'
	];

	// Validation rules for update
	public static $rulesForUpdate = [
		// 'title' => 'required'
		'name' => 'required',
		'email' => 'required',
		'phoneNumber' => 'required',
		'comments' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ["name", "email", "phoneNumber", "comments", "filepath"];

}