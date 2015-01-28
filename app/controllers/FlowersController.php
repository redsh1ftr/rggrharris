<?php

class FlowersController extends \BaseController {

	/**
	 * Display a listing of flowers
	 *
	 * @return Response
	 */
	public function index()
	{
		$flowers = Flower::all();

		return View::make('flowers.index', compact('flowers'));
	}

	/**
	 * Show the form for creating a new flower
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('flowers.create');
	}

	/**
	 * Store a newly created flower in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Flower::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Flower::create($data);

		return Redirect::route('flowers.index');
	}

	/**
	 * Display the specified flower.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$flower = Flower::findOrFail($id);

		return View::make('flowers.show', compact('flower'));
	}

	/**
	 * Show the form for editing the specified flower.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$flower = Flower::find($id);

		return View::make('flowers.edit', compact('flower'));
	}

	/**
	 * Update the specified flower in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$flower = Flower::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Flower::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$flower->update($data);

		return Redirect::route('flowers.index');
	}

	/**
	 * Remove the specified flower from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Flower::destroy($id);

		return Redirect::route('flowers.index');
	}

}
