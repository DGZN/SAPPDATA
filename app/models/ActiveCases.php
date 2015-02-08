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

	public function datatables()
	{
		$activeCases = (new ActiveCase)->all();

		$data = [];

		foreach ( $activeCases as $case ) {
			
			$data['data'][] = [

				$case->name,
				$case->notes,
				$case->created_at->format('Y-m-d h:i:s')

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
