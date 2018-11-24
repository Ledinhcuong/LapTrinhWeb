<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Application;
use App\Banners;
use App\Types;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ApplicationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 // $data = Application::with('Category', 'Types')->get();
		$data = DB::table('Application')
			->join('Category', 'Application.IdCategory', '=', 'Category.IdCategory')
			->join('Types', 'Application.IdType', '=', 'Types.IdType')
			->select('Application.*', 'Types.NameType', 'Category.NameCategory')->get();

		return view('apptable', ['data'=>$data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Application::find($id);
		return view('detailapp', ['data'=>$data]);


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
		Application::find($id)->delete();
		return redirect()->action('ApplicationController@index');

	}

}
