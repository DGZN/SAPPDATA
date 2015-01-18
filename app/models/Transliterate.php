<?php

class Transliterate extends Eloquent {

	
	protected $fillable = ['wordInArabic', 'wordInLatin'];

	public static $rules = [

		'wordInArabic' => 'required|unique:transliterates', 
		'wordInLatin' => 'required|unique:transliterates'

	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'transliterates';

	

	public $errors;

	public function isValid()
	{
		$validation = Validator::make( $this->attributes, static::$rules );

		if ( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	}

}
