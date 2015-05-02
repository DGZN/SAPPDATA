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

		$this->activeCase->admin_id = Auth::id();

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
		$admin = ( new User )->find($case->admin_id);
		
		return View::make('cases.show', [ 'case' => $case, 'admin' => $admin ]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$case = $this->activeCase->find($id);
		$admin = ( new User )->find($case->admin_id);
		
		return View::make('cases.edit', [ 'case' => $case, 'admin' => $admin ]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();

		if ( ! $case = $this->activeCase->find($id) ) return Redirect::back()->withInput()->withErrors();

		if ( ! $case->fill($input)->isValid() )
		{
			return Redirect::back()->withInput()->withErrors( $this->activeCase->errors );
		}


		$case->admin_id = Auth::id();

		$case->save();

		$case = $this->activeCase->find($id);

		$admin = ( new User )->find($case->admin_id);
		
		return View::make('cases.show', [ 'case' => $case, 'admin' => $admin ]);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if ( ! $this->activeCase->find($id) ) return Redirect::back();

		$activeCase = $this->activeCase->find($id);

		$activeCase->delete();

		return Redirect::back();
	}


}
