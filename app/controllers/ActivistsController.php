<?php

class ActivistsController extends \BaseController {

	
	protected $activist;
	

	public function __construct( Activist $activist )
	{
		$this->activist = $activist;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$activists = $this->activist;

		return $activists::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('activists.create', ['activists' => (new Activist)]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if ( ! $this->activist->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors( $this->activist->errors );
		}

		$this->activist->save();

		return Redirect::route('/admin/activists');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$activist = $this->activist->find($id)->first();
		return View::make('activists.show', ['activist' => $activist, 'activists' => $activist]);
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
