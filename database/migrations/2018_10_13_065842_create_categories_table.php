<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Tiến hành tạo bảng Categories
		Schema::create('Categories', function (Blueprint $table) {
            $table->increments('IdCategory');
            $table->string('NameCategory');
            
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Xóa bảng categories nếu thích
		Schema::dropIfExists('Categories');
	}

}
