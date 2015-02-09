<?php

class CasketTypesController extends \BaseController {

	/**
	 * Display a listing of caskettypes
	 *
	 * @return Response
	 */
	public function index()
	{
		$caskettypes = Caskettype::all();

		return View::make('caskettypes.index', compact('caskettypes'));
	}

	/**
	 * Show the form for creating a new caskettype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('caskettypes.create');
	}

	/**
	 * Store a newly created caskettype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Caskettype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Caskettype::create($data);

		return Redirect::back();
	}

	/**
	 * Display the specified caskettype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$caskettype = Caskettype::findOrFail($id);

		return View::make('caskettypes.show', compact('caskettype'));
	}

	/**
	 * Show the form for editing the specified caskettype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$caskettype = Caskettype::find($id);

		return View::make('caskettypes.edit', compact('caskettype'));
	}

	/**
	 * Update the specified caskettype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$caskettype = Caskettype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Caskettype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$caskettype->update($data);

		return Redirect::route('caskettypes.index');
	}

	/**
	 * Remove the specified caskettype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Caskettype::destroy($id);

		return Redirect::route('caskettypes.index');
	}

}
