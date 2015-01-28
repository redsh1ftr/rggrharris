<?php

class CentralsController extends \BaseController {

	/**
	 * Display a listing of centrals
	 *
	 * @return Response
	 */
	public function index()
	{
		$centrals = Central::all();

		return View::make('centrals.index', compact('centrals'));
	}

	/**
	 * Show the form for creating a new central
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('centrals.create');
	}

	/**
	 * Store a newly created central in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Central::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Central::create($data);

		return Redirect::route('centrals.index');
	}

	/**
	 * Display the specified central.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$central = Central::findOrFail($id);

		return View::make('centrals.show', compact('central'));
	}

	/**
	 * Show the form for editing the specified central.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$central = Central::find($id);

		return View::make('centrals.edit', compact('central'));
	}

	/**
	 * Update the specified central in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$central = Central::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Central::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$central->update($data);

		return Redirect::route('centrals.index');
	}

	/**
	 * Remove the specified central from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Central::destroy($id);

		return Redirect::route('centrals.index');
	}

}
