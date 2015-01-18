<?php

class Activist extends Eloquent {


	protected $fillable = [

		'first_name',
		'last_name',
		'nickname',
		'date_of_birth',
		'maritalStatus',
		'gender',
		'cityOfBirth',
		'cityOfResidence',
		'firstNameArabLit',
		'lastNameArabLit',
		'occupation',
		'notes',
		'adminNotes',
		'admin_id',
		'thumbnail'

	];

	public static $rules = [

		'first_name',
		'last_name',
		'gender',
		'firstNameArabLit',
		'lastNameArabLit'

	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'activists';

	public $errors;

	public function isValid()
	{
		$validation = Validator::make( $this->attributes, static::$rules );

		if ( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	} 

}
