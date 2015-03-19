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

		if(Input::file('image_1'))
		{
		$image_1 = Input::file('image_1');
	    $filename_1  = Input::get('name') . '_' . Str::random(5) . '_1.' . $image_1->getClientOriginalExtension();
	    $newimg_1 = Image::make($image_1)->resize(null, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/caskets/'.$filename_1);
	    $newthumb_1 = Image::make($image_1)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/caskets/'.$filename_1);
		}else{
			$filename_1 = 'placeholder.jpg';
		}

		if(Input::file('image_2'))
		{
		$image_2 = Input::file('image_2');
	    $filename_2  = Input::get('name') . '_' . Str::random(5) . '_2.' . $image_2->getClientOriginalExtension();
	    $newimg_2 = Image::make($image_2)->resize(null, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/caskets/'.$filename_2);
	    $newthumb_2 = Image::make($image_2)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/caskets/'.$filename_2);
		}else{
			$filename_2 = 'placeholder.jpg';
		}

		if(Input::file('image_3'))
		{
		$image_3 = Input::file('image_3');
	    $filename_3  = Input::get('name') . '_' . Str::random(5) . '_3.' . $image_3->getClientOriginalExtension();
	    $newimg_3 = Image::make($image_3)->resize(null, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/caskets/'.$filename_3);
	    $newthumb_3 = Image::make($image_3)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/caskets/'.$filename_3);
		}else{
			$filename_3 = 'placeholder.jpg';
		}

		$validator = Validator::make($data = Input::except('_token', 'image_1', 'image_2', 'image_3'), Casket::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Vault::create(array(
			'name' => Input::get('name'),
			'liner' => Input::get('liner'),
			'description' => Input::get('description'),
			'price' => Input::get('price'),
			'image_1' => $filename_1,
			'image_2' => $filename_2,
			'image_3' => $filename_3,

			));	


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
