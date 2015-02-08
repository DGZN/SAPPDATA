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

	public function datatables()
	{
		$transliterates = (new Transliterate)->all();

		$data = [];

		foreach ( $transliterates as $transliterate ) {
			
			$data['data'][] = [

				$transliterate->wordInArabic,
				$transliterate->wordInLatin

			];

		}

		return $data;
	}

	public function isValid()
	{
		$validation = Validator::make( $this->attributes, static::$rules );

		if ( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	}

}
