<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 **/

	protected $table = "signups";

	protected $guarded = [
		'token',
		'id'
	];

}
