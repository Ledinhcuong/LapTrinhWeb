<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model {

	protected $table = 'Reviews';
	
	public function Users() {
		return $this->belongsto('App\Users');
	}

	public function Application() {
		return $this->belongsto('App\Application');
	}

}
