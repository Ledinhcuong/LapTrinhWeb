<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
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


		// Thêm dữ liệu bảng ứng dung
		DB::table('Application')->insert([
			['IdCategory'=>1,
			'NameApp' => '',
			'Developer' =>'',
			'Description'=>'',
			'Icon'=>'',
			'Image1'=>'',
			'Image2'=>'',
			'Image3'=>'',
			'LinkDownload'=>'',
			'NumberDownload'=>0,
			'DateSubmit'=>'2018/10/20',
			


		]

		]);



		// $this->call('UserTableSeeder');
	}

}
