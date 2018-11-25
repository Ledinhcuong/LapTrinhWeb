<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Users::paginate(30);
		return view('usertable', ['data'=>$data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return view('createuser');
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
	public function postCreate(Request $request)
	{
		
		$allRequest = $request->all();
		$IdUser = $allRequest['id'];
		$NamUser = $allRequest['name'];
		$Email = $allRequest['mail'];
		$dataInsertToDatabase = array(
			'id' => $IdUser,
			'nam' => $NamUser,
			'mail' => $mail,
		);

	
		
		$objusers = new users();
		$objusers->insert($dataInsertToDatabase);
		return redirect()->route('admin.users');
	}

}
