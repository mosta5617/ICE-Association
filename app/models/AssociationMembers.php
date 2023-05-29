<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class AssociationMembers extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable= array('id','members_id','designation','created_at','position',
		'updated_at','date','remember_token' );

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'association_members';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'rememberToken');

	protected $guarded = array('password', 'rememberToken');



	/* Extra method */




}
