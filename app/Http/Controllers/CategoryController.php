<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data = Category::paginate(30);
		return view('categorytable', ['data'=>$data]);
	}

	/**
	 * Hiển thị form thêm mới .
	 *
	 * @return Response
	 */
	public function create()
	{
		//Gọi trang view trong thư mục category, file createcategory.blade.php
		return view('category.createcategory');
	}

	/**
	 * action để lưu category mọi khi form submit
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$allRequest = $request->all();
		$nameCategory = $allRequest['NameCategory'];
		$dataInsertToDatabase = array(
			'NameCategory' => $nameCategory
		);

		$objCategory = new Category();
		$objCategory->insert($dataInsertToDatabase);
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
		$objCategory = new  Category();
		$getCatogoryById = $objCategory->find($id)->toArray();
		return view ('category.editcategory')->with('getCategoryById', $getCategoryById);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$allRequest = $request->all();
		$idCategory = $allRequest['IdCategory'];
		$nameCategory = $allRequest['NameCategory'];

		$objCategory = new Category();
		$getCategoryById = $objCategory->find($idCategory);
		$getCategoryById->NameCategory= $nameCategory;
		$getCategoryById->save();

		return redirect()->action('CategoryController.php');
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
		Category::find($idCategory)->delete();
		return redirect()->action('CategoryController@index');
	}

}
