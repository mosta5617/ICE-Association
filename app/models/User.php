<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable= array('id','email','fullname','fullpath','password','password_temp','mobile',
		'designation','created_at','updated_at','session','batch','qualification','linkedin',
		'duty','facebook','website','online','file','code','active','remember_token', 'enroll' );

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'members';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'rememberToken');

	protected $guarded = array('password', 'rememberToken');



	/* Extra method */




}
