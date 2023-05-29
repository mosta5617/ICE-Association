<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Statuss extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable= array('id','members_id','educational_background','professional_experience',
		'field_of_interest','publications','file','fullpath','active',
		'created_at','updated_at','date','remember_token' );

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'status';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'rememberToken');

	protected $guarded = array('password', 'rememberToken');



	/* Extra method */




}
