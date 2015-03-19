<?php

class CasketsController extends \BaseController {

	/**
	 * Display a listing of caskets
	 *
	 * @return Response
	 */
	public function index($type)
	{
		if($type == 'all'){
			$casket = Casket::all();
		}else{
			$casket = Casket::sortGroups($type);
		}

		return View::make('caskets.index', compact('casket', $type));
	}

	public function indexSubtype($type)
	{

			$findcasket = CasketTypeIndex::where('subtype_id', $type)->lists('casket_id');


		return View::make('caskets.someindex', compact('findcasket', $type));
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

		Casket::create(array(
			'product_id' => Input::get('product_id'),
			'name' => Input::get('name'),
			'type' => Input::get('sort_group'),
			'casket_number' => Input::get('casket_number'),
			'shell' => Input::get('shell'),
			'interior' => Input::get('interior'),
			'material' => Input::get('material'),
			'manufacturer' => Input::get('manufacturer'),
			'casket_group' => Input::get('casket_group'),
			'sort_group' => Input::get('sort_group'),
			'price' => Input::get('price'),
			'cost' => Input::get('cost'),
			'size' => Input::get('size'),
			'notes' => Input::get('notes'),
			'panel' => Input::get('panel'),
			'vault_size' => Input::get('vault_size'),
			'interior_dimensions' => Input::get('interior_dimensions'),
			'image_1' => $filename_1,
			'image_2' => $filename_2,
			'image_3' => $filename_3,

			));	


		return Redirect::route('casketIndex', 'all');
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

		$validator = Validator::make($data = Input::except('image_1', 'image_2', 'image_3', '_token'), Casket::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

			$filename_2 = $casket->image_2;

			if(Input::file('image_1')){
			$image_1 = Input::file('image_1');
		    $filename_1  = Input::get('name') . '_' . Str::random(5) . '_1.' . $image_1->getClientOriginalExtension();
		    $newimg_1 = Image::make($image_1)->resize(null, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/caskets/'.$filename_1);
		    $newthumb_1 = Image::make($image_1)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/caskets/'.$filename_1);
			$casket->update(array('image_1' => $filename_1));
			}
			
			if(Input::file('image_2')){
			$image_2 = Input::file('image_2');
		    $filename_2  = Input::get('name') . '_' . Str::random(5) . '_2.' . $image_2->getClientOriginalExtension();
		    $newimg_2 = Image::make($image_2)->resize(null, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/caskets/'.$filename_2);
		    $newthumb_2 = Image::make($image_2)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/caskets/'.$filename_2);
			$casket->update(array('image_2' => $filename_2));
			}

		    if(Input::file('image_3')){
			$image_3 = Input::file('image_3');
		    $filename_3  = Input::get('name') . '_' . Str::random(5) . '_3.' . $image_3->getClientOriginalExtension();
		    $newimg_3 = Image::make($image_3)->resize(null, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/caskets/'.$filename_3);
		    $newthumb_3 = Image::make($image_3)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/caskets/'.$filename_3);
		    $casket->update(array('image_3' => $filename_3));
			}







		$casket->update($data);

		return Redirect::route('casketIndex', $casket->sort_group);
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
