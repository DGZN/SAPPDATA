<?php

class ActivistsController extends \BaseController {

	
	protected $activist;

	protected $attachmentErrors;
	

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

		return View::make('activists.index', ['activists' => $activists::all()]);
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
		
		$uploadSuccess = False;

		if($attachment = Input::file('thumbnail'))
		{


			$thumbnail = array(

				'name' 	      => $attachment->getClientOriginalName(),
				'mime_type'	  => $attachment->getMimeType(),
				'real_path'   => $attachment->getRealPath(),
				'extension'   => $attachment->getClientOriginalExtension(),
				'destination' => 'uploads/',
				'randName'    => str_random(32).'.'.$attachment->getClientOriginalExtension()

			);

			if ( ! $this->attachmentValid($attachment) )
			{
				return Redirect::back()->withInput()->withErrors( $this->attachmentErrors );
			}

			$upload_success = Input::file('thumbnail')->move( $thumbnail['destination'], $thumbnail['randName'] );

			if ( $upload_success ) $uploadSuccess = true;

			if ( ! $uploadSuccess ) return Response::json('Error uploading attachment', 400);

		}


		if ( ! $this->activist->fill($input)->isValid() )
		{
			return Redirect::back()->withInput()->withErrors( $this->activist->errors );
		}

		if($uploadSuccess) $this->activist->thumbnail = $thumbnail['randName'];

		$this->activist->save();

		$activists = new Activist;
		
		return View::make('activists.index', ['activists' => $activists::all()]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$activist = $this->activist->find($id);
		return View::make('activists.show', [ 'activist' => $activist ]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$activist = $this->activist->find($id);
		$admin = ( new User )->find($activist->admin_id);
		
		return View::make('activists.edit', [ 'activist' => $activist, 'admin' => $admin ]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if ( ! $activist = $this->activist->find($id) ) return Redirect::back()->withInput();

		$input = Input::all();

		$uploadSuccess = False;

		if($attachment = Input::file('thumbnail'))
		{
			$thumbnail = array(

				'name' 	      => $attachment->getClientOriginalName(),
				'mime_type'	  => $attachment->getMimeType(),
				'real_path'   => $attachment->getRealPath(),
				'extension'   => $attachment->getClientOriginalExtension(),
				'destination' => 'uploads/',
				'randName'    => str_random(32).'.'.$attachment->getClientOriginalExtension()

			);

			if ( ! $this->attachmentValid($attachment) )
			{
				return Redirect::back()->withInput()->withErrors( $this->attachmentErrors );
			}

			$upload_success = Input::file('thumbnail')->move( $thumbnail['destination'], $thumbnail['randName'] );

			if ( $upload_success ) $uploadSuccess = true;

			if ( ! $uploadSuccess ) return Response::json('Error uploading attachment', 400);

		} else $input['thumbnail'] = $activist->thumbnail;

		if ( ! $activist->fill($input)->isValid() )
		{
			return Redirect::back()->withInput()->withErrors( $activist->errors );
		}

		if($uploadSuccess) $activist->thumbnail = $thumbnail['randName'];

		$activist->save();

		$activists = new Activist;
		
		return View::make('activists.index', ['activists' => $activists::all()]);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(!$activist = $this->activist->find($id)) return Redirect::back();
		$activist->delete();
		return Redirect::back();
	}

	private function attachmentValid($file)
	{
	    $validation = Validator::make(

		    [
		    	'attachment' => $file,
		        'extension'  => \Str::lower($file->getClientOriginalExtension()),
			],

			[
				'attachment' => 'required|max:10000',
		        'extension'  => 'required|in:jpg,jpeg,bmp,png',
			]

	    );
	    
	    if ( $validation->passes() ) return true;

	    $this->attachmentErrors = $validation->messages();

	    return false;
	} 


}
