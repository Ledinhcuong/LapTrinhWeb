<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration {

	/**
	 * Tạo bảng Product
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Product', function (Blueprint $table) {
            $table->integer('IdCategory')->unsigned();
            $table->foreign('IdCategory')->references('IdCategory')->on('Categories');

            $table->increments('IdProduct');
            $table->string('NameProduct', 40); 
            $table->double('Price', 15);
            $table->string('ImageProduct', 80);
            $table->boolean('Availability');  // Trạng thái có trong giỏ hàng chưa
            $table->string('Description');
            $table->integer('Number');
            $table->string('Brand');
           
        });


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Product');
	}

}
