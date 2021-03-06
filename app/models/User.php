<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	/**
	 * Mass Assignment
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password', 'password_confirmation'];


	public function link() {

		return $this->hasMany('Link');

	}


	public function getRememberToken() {

		return $this->remember_token;

	}


	public function setRememberToken($value) {

		$this->remember_token = $value;

	}


	public function getRememberTokenName() {

		return 'remember_token';
		
	}

}
