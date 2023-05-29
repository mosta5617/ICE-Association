<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Interest extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable= array('id','members_id','field_of_interest','created_at','updated_at','date','remember_token' );

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'field_of_interest';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'rememberToken');

	protected $guarded = array('password', 'rememberToken');



	/* Extra method */




}
