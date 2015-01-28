<?php

class VaultsController extends \BaseController {

	/**
	 * Display a listing of vaults
	 *
	 * @return Response
	 */
	public function index()
	{
		$vaults = Vault::all();

		return View::make('vaults.index', compact('vaults'));
	}

	/**
	 * Show the form for creating a new vault
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('vaults.create');
	}

	/**
	 * Store a newly created vault in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Vault::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Vault::create($data);

		return Redirect::route('vaults.index');
	}

	/**
	 * Display the specified vault.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vault = Vault::findOrFail($id);

		return View::make('vaults.show', compact('vault'));
	}

	/**
	 * Show the form for editing the specified vault.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vault = Vault::find($id);

		return View::make('vaults.edit', compact('vault'));
	}

	/**
	 * Update the specified vault in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$vault = Vault::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Vault::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$vault->update($data);

		return Redirect::route('vaults.index');
	}

	/**
	 * Remove the specified vault from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Vault::destroy($id);

		return Redirect::route('vaults.index');
	}

}
