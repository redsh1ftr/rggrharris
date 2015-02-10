<?php

class CasketSubTypesController extends \BaseController {

	/**
	 * Display a listing of casketsubtypes
	 *
	 * @return Response
	 */
	public function index()
	{
		$casketsubtypes = Casketsubtype::all();

		return View::make('casketsubtypes.index', compact('casketsubtypes'));
	}

	/**
	 * Show the form for creating a new casketsubtype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('casketsubtypes.create');
	}

	/**
	 * Store a newly created casketsubtype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Casketsubtype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Casketsubtype::create($data);

		return Redirect::back();
	}

	/**
	 * Display the specified casketsubtype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$casketsubtype = Casketsubtype::findOrFail($id);

		return View::make('casketsubtypes.show', compact('casketsubtype'));
	}

	/**
	 * Show the form for editing the specified casketsubtype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$casketsubtype = Casketsubtype::find($id);

		return View::make('casketsubtypes.edit', compact('casketsubtype'));
	}

	/**
	 * Update the specified casketsubtype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$casketsubtype = Casketsubtype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Casketsubtype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$casketsubtype->update($data);

		return Redirect::back();
	}

	/**
	 * Remove the specified casketsubtype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Casketsubtype::destroy($id);

		return Redirect::route('casketsubtypes.index');
	}

}
