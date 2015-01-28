<?php

class CasketsController extends \BaseController {

	/**
	 * Display a listing of caskets
	 *
	 * @return Response
	 */
	public function index()
	{
		$caskets = Casket::all();

		return View::make('caskets.index', compact('caskets'));
	}

	/**
	 * Show the form for creating a new casket
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('caskets.create');
	}

	/**
	 * Store a newly created casket in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Casket::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Casket::create($data);

		return Redirect::route('caskets.index');
	}

	/**
	 * Display the specified casket.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$casket = Casket::findOrFail($id);

		return View::make('caskets.show', compact('casket'));
	}

	/**
	 * Show the form for editing the specified casket.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$casket = Casket::find($id);

		return View::make('caskets.edit', compact('casket'));
	}

	/**
	 * Update the specified casket in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$casket = Casket::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Casket::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$casket->update($data);

		return Redirect::route('caskets.index');
	}

	/**
	 * Remove the specified casket from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Casket::destroy($id);

		return Redirect::route('caskets.index');
	}

}
