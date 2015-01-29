<?php

class InfosController extends \BaseController {

	/**
	 * Display a listing of infos
	 *
	 * @return Response
	 */
	public function index()
	{
		$infos = Info::all();

		return View::make('infos.index', compact('infos'));
	}

	/**
	 * Show the form for creating a new info
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('infos.create');
	}

	/**
	 * Store a newly created info in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Info::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Info::create($data);

		return Redirect::route('infos.index');
	}

	/**
	 * Display the specified info.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$info = Info::findOrFail($id);

		return View::make('infos.show', compact('info'));
	}

	/**
	 * Show the form for editing the specified info.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$info = Info::find($id);

		return View::make('infos.edit', compact('info'));
	}

	/**
	 * Update the specified info in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$info = Info::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Info::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$info->update($data);

		return Redirect::route('infos.index');
	}

	/**
	 * Remove the specified info from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Info::destroy($id);

		return Redirect::route('infos.index');
	}

}
