<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Application;
use App\Banners;
use App\Types;
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


			// Lấy nội dung mới nhất hiển thị
			$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->where('IdCategory', 1)->paginate(6);


			// Lay 4 banner moi nhat
			$banner = DB::table('Banners')->limit(4)->get();


			// Lay 10 ung dung tai nhieu nhat
			$topdown =  DB::table('Application')->orderBy('NumberDownload', 'desc')->where('IdCategory', 1)->limit(10)->get();



			// Lay 6 ung dung ngau nhien de de xuat
			$randomApp = Application::all()->random(6);



			//$data->setBaseUrl('myproject/public/index');
			return view('index', ['data'=>$data, 'banner'=>$banner, 'topdown'=>$topdown, 'randomApp'=>$randomApp]);


		}

		if ($page == 'game') {

			
			// Lấy nội dung mới nhất hiển thị
			$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->where('IdCategory', 2)->paginate(9);


			// Lay 4 banner moi nhat
			$banner = DB::table('Banners')->limit(4)->get();


			// Lay 10 ung dung tai nhieu nhat
			$topdown =  DB::table('Application')->orderBy('NumberDownload', 'desc')->where('IdCategory', 2)->limit(10)->get();



			// Lay 6 ung dung ngau nhien de de xuat
			$randomApp = Application::all()->random(6);



			//$data->setBaseUrl('myproject/public/index');
			return view('index', ['data'=>$data, 'banner'=>$banner, 'topdown'=>$topdown, 'randomApp'=>$randomApp]);
		}


		// Các trang còn lại
		return view($page);
		
	}

	// Lay thong tin mot ung dung
	public function getChiTiet($IdApp){



		$data = DB::table('Application')
			->join('Types', 'Application.IdType', '=' , 'Types.IdType')
			->select('Application.*', 'Types.NameType')->where('IdApplication', $IdApp)->first();
			

		return $data;
		
	}


	// Tim kiem ung dung theo ten
	public function searchApp($key) {

		$result = DB::table('Application')->where('NameApp', 'like', '%'.$key.'%')->simplePaginate(8);
		return $result;
	}

	// Loc ung dung theo loai
	public function filterType($type) {


		$result = DB::table('Application')->where('IdType', 'like', '%'.$type.'%')->simplePaginate(8);
		return $result;

	}

	// Lay ten ung dung
	public function getNameType($id) {

		return Types::find($id);
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
		
	}

}
