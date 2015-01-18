<?php

class ActiveCase extends Eloquent {


	protected $fillable = [

		'name',
		'type',
		'name',
		'notes',
		'links',
		'admin_id'

	];

	public static $rules = [

		'name',
		'type',
		'name',
		'notes',
		'links',
		'admin_id'

	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'cases';

	public $errors;

	public function isValid()
	{
		$validation = Validator::make( $this->attributes, static::$rules );

		if ( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	} 

}
