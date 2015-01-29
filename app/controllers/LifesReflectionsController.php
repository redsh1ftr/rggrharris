<?php

class LifesReflectionsController extends \BaseController {

	/**
	 * Display a listing of lifesreflections
	 *
	 * @return Response
	 */
	public function index()
	{
		$lifesreflections = Lifesreflection::all();

		return View::make('lifesreflections.index', compact('lifesreflections'));
	}

	/**
	 * Show the form for creating a new lifesreflection
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('lifesreflections.create');
	}

	/**
	 * Store a newly created lifesreflection in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Lifesreflection::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Lifesreflection::create($data);

		return Redirect::route('lifesreflections.index');
	}

	/**
	 * Display the specified lifesreflection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$lifesreflection = Lifesreflection::findOrFail($id);

		return View::make('lifesreflections.show', compact('lifesreflection'));
	}

	/**
	 * Show the form for editing the specified lifesreflection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$lifesreflection = Lifesreflection::find($id);

		return View::make('lifesreflections.edit', compact('lifesreflection'));
	}

	/**
	 * Update the specified lifesreflection in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$lifesreflection = Lifesreflection::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Lifesreflection::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$lifesreflection->update($data);

		return Redirect::route('lifesreflections.index');
	}

	/**
	 * Remove the specified lifesreflection from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Lifesreflection::destroy($id);

		return Redirect::route('lifesreflections.index');
	}

}
