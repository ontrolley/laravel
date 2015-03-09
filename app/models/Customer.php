<?php

use Illuminate\Auth\UserInterface;

class Customer extends Eloquent implements UserInterface {

	public function getAuthPassword(){
		return $this->password;
	}
	public function getRememberToken(){
		return $this->remember_token;
	}
	public function getRememberTokenName(){
		return 'remember_token';
	}
	public function getAuthIdentifier(){
		return $this->getKey();
	}
	public function setRememberToken($value){
		$this->remember_token = $value;
	}

	// Validation rules for store
	public static $rulesForStore = [
		'name' => 'required',
		'email' => 'required|email|unique:customers',
		'phoneNumber' => 'required|regex:/^\+?[0-9]{3}-?[0-9]{6,12}$/',
		'comments' => 'required',
		'password'=>'required|alpha_num|between:6,12|confirmed'
	];

	// Validation rules for update
	public static $rulesForUpdate = [
		'name' => 'required',
		'email' => 'required',
		'phoneNumber' => 'required|regex:/^\+?[0-9]{3}-?[0-9]{6,12}$/',
		'comments' => 'required',
		'password'=>'required|alpha_num|between:6,12|confirmed',
	];

	// Don't forget to fill this array
	protected $fillable = ["name", "email", "phoneNumber", "comments", "filepath", "password", "lastname", "remember_token"];

}