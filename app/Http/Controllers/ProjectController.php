<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($page = 'index')
	{


		// Nếu dữ liệu trả về là trang index (Tri có một tham số truyền vào)
		if($page == 'index') {


			$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->where('IdCategory', 1)->get();


			return view($page, ['data'=>$data]);

		}

		if ($page == 'game') {

			$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->where('IdCategory', 2)->get();


			return view('index', ['data'=>$data]);
		}


		// Các trang còn lại
		return view($page);
		
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
		//
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
