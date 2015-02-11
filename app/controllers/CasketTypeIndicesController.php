<?php

class CasketTypeIndicesController extends \BaseController {

	/**
	 * Display a listing of caskettypeindices
	 *
	 * @return Response
	 */
	public function index()
	{
		$caskettypeindices = Caskettypeindex::all();

		return View::make('caskettypeindices.index', compact('caskettypeindices'));
	}

	/**
	 * Show the form for creating a new caskettypeindex
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('caskettypeindices.create');
	}

	/**
	 * Store a newly created caskettypeindex in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$caskets = Input::get('casket_id');

		foreach ($caskets as $cid) {

			if(CasketTypeIndex::where('subtype_id', Input::get('subtype_id'))->where('casket_id', $cid)->first()){

				DB::table('caskettypeindices')->where('subtype_id', 'subtype_id')->where('casket_id', $cid)->update(array('casket_id' => $cid, 'subtype_id' => Input::get('subtype_id')));
			}else{
				
				DB::table('caskettypeindices')->insert(array('casket_id' => $cid, 'subtype_id' => Input::get('subtype_id')));

			}
			
		}
		

		return Redirect::back();
	}

	/**
	 * Display the specified caskettypeindex.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$caskettypeindex = Caskettypeindex::findOrFail($id);

		return View::make('caskettypeindices.show', compact('caskettypeindex'));
	}

	/**
	 * Show the form for editing the specified caskettypeindex.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$caskettypeindex = Caskettypeindex::find($id);

		return View::make('caskettypeindices.edit', compact('caskettypeindex'));
	}

	/**
	 * Update the specified caskettypeindex in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$caskettypeindex = Caskettypeindex::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Caskettypeindex::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$caskettypeindex->update($data);

		return Redirect::route('caskettypeindices.index');
	}

	/**
	 * Remove the specified caskettypeindex from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Caskettypeindex::destroy($id);

		return Redirect::route('caskettypeindices.index');
	}

}
