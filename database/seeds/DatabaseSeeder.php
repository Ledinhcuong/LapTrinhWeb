<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
	 public function run()
	{
		Model::unguard();
		

		// Thêm dữ liệu vào bảng category
		DB::table('Category')->insert([
			['NameCategory'=>'Software'],
			['NameCategory'=>'Game'],
			['NameCategory'=>'Book']

		]);


		// Thêm dữ liệu vào bảng types
		DB::table('Types')->insert([
			['NameType'=>'Năng xuất'],
			['NameType'=>'Xã hội'],
			['NameType'=>'Tin tức'],
			['NameType'=>'Sức khỏe'],
			['NameType'=>'Bản đồ'],
			['NameType'=>'Cá nhân hóa'],
			['NameType'=>'Sách'],
			['NameType'=>'Giải trí'],
			['NameType'=>'Ảnh'],
			['NameType'=>'Video'],
			['NameType'=>'Nhạc'],
			['NameType'=>'Bảo mật'],
			['NameType'=>'Giáo dục'],
			['NameType'=>'Thời tiết'],
			['NameType'=>'Mua sắm'],
			['NameType'=>'Chiến lược'],
			['NameType'=>'Thể thao'],
			['NameType'=>'Hành động'],
			['NameType'=>'Sòng bạc'],
			['NameType'=>'Mô phỏng'],
			['NameType'=>'Cổ điển'],
			['NameType'=>'Phiêu lưu'],
			['NameType'=>'Bắn súng'],
			['NameType'=>'Đố chữ'],
			['NameType'=>'Nhập vai']

		]);



		// Thêm dữ liệu bảng ứng dung
		DB::table('Application')->insert([
			['IdCategory'=>1,
			'IdType'=>1,
			'NameApp' => 'Microsoft edge',
			'Developer' =>'Microsoft',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'edgeicon.png',
			'Image1'=>'edge1.jpg',
			'Image2'=>'edge2.jpg',
			'Image3'=>'edge3.jpg',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>5,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Lướt web nhanh hơn bao giờ hết'
		],

		['IdCategory'=>1,
			'IdType'=>1,
			'NameApp' => 'Gesture',
			'Developer' =>'Oval',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'gestureicon.png',
			'Image1'=>'gesture1.png',
			'Image2'=>'gesture2.png',
			'Image3'=>'gesture3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>10,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Điều hướng phong cách iphone x'
		],

		['IdCategory'=>1,
			'IdType'=>6,
			'NameApp' => 'Volume slide',
			'Developer' =>'Maxtine',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'volumeslideicon.png',
			'Image1'=>'volumeslide1.png',
			'Image2'=>'volumeslide2.png',
			'Image3'=>'volumeslide3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>80,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Điều chỉnh âm lượng phong cách android 9'
		],

		['IdCategory'=>1,
			'IdType'=>1,
			'NameApp' => 'Stick share',
			'Developer' =>'the verb',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'stickshareicon.png',
			'Image1'=>'stickshare1.png',
			'Image2'=>'stickshare2.png',
			'Image3'=>'stickshare3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>60,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Chụp nhanh màn hình'
		],

		['IdCategory'=>1,
			'IdType'=>6,
			'NameApp' => 'Recent bar',
			'Developer' =>'apple',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'recentbaricon.png',
			'Image1'=>'recentbar1.png',
			'Image2'=>'recentbar2.png',
			'Image3'=>'recentbar3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>20,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Mở nhanh ứng dụng gần đây'
		],

		['IdCategory'=>1,
			'IdType'=> 3,
			'NameApp' => 'Splashtop',
			'Developer' =>'Ramus',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'splashtopicon.png',
			'Image1'=>'volumeslide4.png',
			'Image2'=>'recentbar4.png',
			'Image3'=>'edge4.jpg',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>15,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Biến màn hình điện thoại thành màn hình phụ'
		],

		['IdCategory'=>1,
			'IdType'=>1,
			'NameApp' => 'Datally',
			'Developer' =>'Google',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'datallyicon.png',
			'Image1'=>'datally1.png',
			'Image2'=>'datally2.png',
			'Image3'=>'datally3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>11,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Theo dõi lưu lượng sử dụng'
		],

		['IdCategory'=>1,
			'IdType'=>1,
			'NameApp' => 'File go',
			'Developer' =>'Google',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'filesgoicon.png',
			'Image1'=>'filego1.png',
			'Image2'=>'filego2.png',
			'Image3'=>'filego3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>95,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Quan ly file'
		],

		['IdCategory'=>1,
			'IdType'=>1,
			'NameApp' => 'Just aline',
			'Developer' =>'Google',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'justalineicon.png',
			'Image1'=>'justaline1.png',
			'Image2'=>'justaline2.png',
			'Image3'=>'justaline3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>95,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Ứng dụng AR'
		],

		['IdCategory'=>1,
			'IdType'=>1,
			'NameApp' => 'Forest',
			'Developer' =>'Google',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'floatingbaricon.png',
			'Image1'=>'forestlive1.png',
			'Image2'=>'forestlive2.png',
			'Image3'=>'forestlive3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>95,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Ứng dụng AR'
		],

		['IdCategory'=>2,
			'IdType'=>14,
			'NameApp' => 'Monster',
			'Developer' =>'Sigma game',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'monstericon.png',
			'Image1'=>'monster1.jpg',
			'Image2'=>'monster2.jpg',
			'Image3'=>'monster3.jpg',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>32,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Trò chơi nhập vai'
		],
		['IdCategory'=>2,
			'IdType'=>18,
			'NameApp' => 'Pokemon quest',
			'Developer' =>'Sigma game',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'pokemon1.png',
			'Image1'=>'pokemon1.png',
			'Image2'=>'pokemon2.png',
			'Image3'=>'pokemon3.png',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>65,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Game giải trí nhẹ nhàng'
		],

		['IdCategory'=>2,
			'IdType'=>20,
			'NameApp' => 'Green farm',
			'Developer' =>'Gameloft',
			'Description'=>'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!',
			'Icon'=>'greenfarmlogo.png',
			'Image1'=>'greenfarm1.jpg',
			'Image2'=>'greenfarm2.jpg',
			'Image3'=>'greenfarm3.jpg',
			'LinkDownload'=>'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab',
			'NumberDownload'=>65,
			'Version' => 1,
			'Size' => 50,
			'SortDescription'=> 'Game nông trại giải trí'
		]

		]);



		

		// Thêm dữ liệu vào bảng User
		DB::table('Users')->insert([
			['NameUser'=>'CuongDinh',
			'TypeUser'=>1,
			'Email'=>'cuongdinh@gmail.com',
			'password'=>'123456'],

			['NameUser'=>'DungLe',
			'TypeUser'=>0,
			'Email'=>'DungLe@gmail.com',
			'password'=>'123456'],

			['NameUser'=>'PhuongTran',
			'TypeUser'=>0,
			'Email'=>'phuongtran@gmail.com',
			'password'=>'123456'],

			['NameUser'=>'NguyetTran',
			'TypeUser'=>0,
			'Email'=>'nguyettran@gmail.com',
			'password'=>'123456']

		]);


		// Thêm dữ liệu vào bảng banner
		DB::table('Banners')->insert([
			['ContentBanner'=>'Nơi đây tổng hợp các phần mềm hoàn toàn miễn phí',
			'ImageBanner'=>'banner page.jpg'],

			['ContentBanner'=>'Những trò chơi hay nhất đang đợi bạn',
			'ImageBanner'=>'banner 2.jpg'],

			['ContentBanner'=>'Hãy chia sẽ trang này cho bạn bè của bạn',
			'ImageBanner'=>'banner 3.jpg'],


			['ContentBanner'=>'Những ứng dụng mang đến trải nghiệm tốt nhất',
			'ImageBanner'=>'banner 4.jpg']


		]);


		// $this->call('UserTableSeeder');
	}
   
}
