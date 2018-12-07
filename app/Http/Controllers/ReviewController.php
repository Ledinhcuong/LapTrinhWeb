<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Reviews;
use App\Application;
use App\Banners;
use App\Types;
use Illuminate\Support\Facades\DB;
use App\Category;

use Illuminate\Http\Request;

class ReviewController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data =  DB::table('Reviews')
		->join('Application', 'Reviews.IdApplication', '=', 'Application.IdApplication')
		->join('Users', 'Reviews.IdUser', '=', 'Users.id')
		->select('Reviews.*', 'Application.NameApp', 'Users.name')->simplePaginate(50);


		return view('reviewtable', ['data'=>$data]);
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
	public function store(Request $request)
	{
		$allRequest = $request->all();
		$appid = $allRequest['appid'];
		$username = $allRequest['username'];
		$date = new \DateTime();
		$comment = $allRequest['user-comment'];

		$dataInsertToDatabase = array(
			'IdApplication' => $appid,
			'IdUser' => $username,
			'ReviewDate' => $date,
			'ContentReview' => $comment
		);

		$objReview = new Reviews();
		$objReview->insert($dataInsertToDatabase);
		return back();
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
	public function destroy($IdApp, $IdUser)
	{
		 Reviews::where('IdApplication', $IdApp)->where('IdUser', $IdUser)->delete();
		 return redirect()->action('ReviewController@index');
	}

}
