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

	public function datatables()
	{
		$translations = (new Translation)->all();

		$data = [];

		foreach ( $translations as $translation ) {
			
			$data['data'][] = [

				$translation->wordInFarsi,
				$translation->wordInTurkish,
				$translation->wordInEnglish

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
