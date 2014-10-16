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

	private $rules = array(
		'user_name' => array('required', 'regex:/^[0-9 a-zA-Z]+$/'),
		'real_name' => array('required', 'regex:/^[\x{4e00}-\x{9fa5}A-Z a-z0-9_]+$/u'),
		'password' => 'required',
		'email' => 'required|email'
	);

	public function validate($input, $type=""){
		if($type == "update"){
			unset($this->rules['password']);
		}
		return Validator::make($input, $this->rules);
	}

	public function getUserAdmin($id){
		return DB::table('users')->where('id', '=', $id)->get();
	}
}
