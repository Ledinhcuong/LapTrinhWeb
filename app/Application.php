<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Application extends Model {

	protected $table = 'Application';
	protected $primaryKey = 'IdApplication';

	public function Reviews() {
		return $this->hasMany('App\Reviews');
	}

	public function Category() {
		return $this->hasMany('App\Category');
	}
	
	
}
