<?php

class CasesController extends \BaseController {

	protected $activeCase;

	protected $errors;

	public function __construct( ActiveCase $activeCase )
	{
		$this->activeCase = $activeCase;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cases = $this->activeCase;

		return View::make('cases.index', ['cases' => $cases::all()]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cases.create', ['cases' => (new ActiveCAse)]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if ( ! $this->activeCase->fill($input)->isValid() )
		{
			return Redirect::back()->withInput()->withErrors( $this->activeCase->errors );
		}

		$this->activeCase->save();

		$cases = new ActiveCase;
		
		return View::make('cases.index', ['cases' => $cases::all()]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$case = $this->activeCase->find($id);
		return View::make('cases.show', [ 'case' => $case ]);
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
