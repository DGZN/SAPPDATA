<?php

class TranslationsController extends \BaseController {

	protected $translation;
	

	public function __construct( Translation $translation )
	{
		$this->translation = $translation;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$translations = $this->translation;

		return View::make('translations.index', ['translations' => $translations::all()]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$translations = $this->translation;

		return View::make('translations.create', ['translations' => $translations::all()]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if ( ! $this->translation->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors( $this->translation->errors );
		}

		$this->translation->save();

		$translations = $this->translation;

		return View::make('translations.index', ['translations' => $translations::all()]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
