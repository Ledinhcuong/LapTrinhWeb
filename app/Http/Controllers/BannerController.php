<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banners;
use Illuminate\Http\Request;

class BannerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Banners::paginate(30);
		return view('bannertable', ['data'=>$data]);
	}

	public function getCreate()
	{
		return view('createbanner');
	}


	public function postCreate(Request $request)
	{
		$allRequest = $request->all();
		$bannerContent = $allRequest['ContentBanner'];
		
		$objBanner = new Banners();
		$objBanner->insert($dataInsertToDatabase);
		return redirect()->route('admin.banner');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("createbanner");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$allRequest = $request->all();
		$bannerContent = $allRequest['ContentBanner'];
		$result = true;
		
		$location = 'public/images/';
		
		// Xu ly file bannerImage
		$bannerImage = $allRequest['ImageBanner'];

		$namebannerImage = $bannerImage->getClientOriginalName();  // Lấy tên file
		$bannerImagetype = $bannerImage->getClientOriginalExtension(); // Lấy đuôi file
		$linkbannerImage = $bannerImage->getRealPath();

		if (($bannerImagetype == "jpg"  OR $bannerImagetype == "png") AND $result != false) {
			// Tiến hành di chuyển file vô thư mục
			$bannerImage->move($location, $namebannerImage);
		} else {
			$result = false;
			return  'File được chọn không đúng định dạng png hoặc jpg :(';
		}
		
		$objBanner = new Banners();
		$objBanner->ImageBanner = $namebannerImage;
		$objBanner->ContentBanner = $bannerContent;
		$objBanner->save();
		return redirect()->route('admin.banner');
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

	public function getEdit($id)
	{
		
		$objBanner = new  Banner();
		$getBannerById = $objBanner->find($id)->toArray();
		return view ('editbanner',array('id'=>$id))->with('getBannerById', $getBannerById);
	}

	public function postEdit($id,Request $request)
	{
		//
		$allRequest = $request->all();
		$idBanner = $id;
		$nameBanner = $allRequest['name'];

		$objBanner = new Banner();
		$getBannerById = $objBanner->find($idBanner);
		$getBannerById->NameBanner = $nameBanner;
		$getBannerById->save();
		return redirect()->route('admin.banner');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view("EditBanner");
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
