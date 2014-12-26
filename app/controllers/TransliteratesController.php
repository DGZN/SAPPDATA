<?php

class TransliteratesController extends \BaseController {

	
	protected $transliterate;
	

	public function __construct( Transliterate $transliterate )
	{
		$this->transliterate = $transliterate;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transliterates = $this->transliterate;

		return View::make('transliterates.index', ['transliterates' => $transliterates::all()]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$transliterates = $this->transliterate;

		return View::make('transliterates.create', ['transliterates' => $transliterates::all()]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if ( ! $this->transliterate->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors( $this->transliterate->errors );
		}

		$this->transliterate->save();

		$transliterates = $this->transliterate;

		return View::make('transliterates.index', ['transliterates' => $transliterates::all()]);
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
