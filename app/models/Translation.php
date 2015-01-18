<?php

class Translation extends Eloquent {


	protected $fillable = [

		'wordInFarsi', 
		'wordInTurkish', 
		'wordInEnglish'

	];

	public static $rules = [

		'wordInFarsi' => 'required|unique:translations', 
		'wordInTurkish'  => 'required|unique:translations', 
		'wordInEnglish'  => 'required|unique:translations'

	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'translations';

	public $errors;

	public function isValid()
	{
		$validation = Validator::make( $this->attributes, static::$rules );

		if ( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	}

}
