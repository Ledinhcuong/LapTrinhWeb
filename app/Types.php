<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model {

	protected $table = 'Types';
	protected $primaryKey = 'IdType';

	public function Application() {
		return $this->hasMany('App\Application', 'IdType');
	}

}
