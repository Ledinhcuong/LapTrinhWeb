<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'Category';
	protected $primaryKey = 'IdCategory';

	public function Application() {
		
		return $this->hasMany('App\Application', 'IdCategory');
	}

}
