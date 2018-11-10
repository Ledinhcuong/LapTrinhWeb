<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

	protected $table = 'Users';
	protected $primaryKey = 'IdUser';

	public function Reviews() {
		return $this->hasMany('App\Reviews', 'IdUser');
	}

}
