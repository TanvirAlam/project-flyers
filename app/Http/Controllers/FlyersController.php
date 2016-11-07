<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;
use App\Flyers;
use App\Photo;
use App\Http\flash;

class FlyersController extends Controller {

	
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//flash()->overlay('Success!', 'Your flyer has benn created.');

		return view('flyers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FlyerRequest $request)
	{
		// //validate the form
		Flyers::create($request->all());
		// //persist teh flyer
		// //flash('Success!', 'Your flyer has benn created.');
		flash()->success('Success!', 'Your flyer has benn created.');
		// //Flyer::create($request->all());
		
		return redirect()->back();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($zipcode, $street)
	{
		// $street = str_replace('-', ' ', $street);
		$flyer = Flyers::LocatedAt($zipcode, $street)->first();
		// dd($flyer);
		return view('flyers.show', compact('flyer'));
	}

	public function addPhoto($zipcode, $street, FlyerRequest $request)
	{
		
		$this->validate($request, [
			'file' => 'required|mimes:jpg,jpeg,png,bmp'
		]);

		$file = $request->file('file');
		$name = time() . $file->getClientOriginalName();
		$file->move('flyers/photos', $name);
		$flyer = Flyers::LocatedAt($zipcode, $street)->first();
		$flyer->photos()->create(['path'=> "/flyers/photos/{$name}"]);
		return 'Done';
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
