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
		//Model::unguard();


/*
		// Thêm dữ liệu vào bảng categories
		DB::table('Categories')->insert([
			['NameCategory'=>'Clothes'],
			['NameCategory'=>'Shoes']
		]);

*/

		// Thêm dữ liệu vào bảng product
		DB::table('Product')->insert([
			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-1.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],


			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-2.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],


			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-3.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],


			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-4.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],


			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-5.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],



			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-5.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],



			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-4.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],



			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-5.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],



			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-1.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia'],


			['IdCategory'=>1, 
			'NameProduct'=>'Long Sleeve TShirt', 
			'Price'=> 150, 
			'ImageProduct'=>'img/product/feature-product/f-p-4.jpg', 
			'Availibility'=> 1,
			'Description'=> 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter', 
			'Number'=>10 , 
			'Brand'=>'Asia']


		]);


		// $this->call('UserTableSeeder');
	}

}
