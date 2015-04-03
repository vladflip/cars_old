<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model {

	protected $table = 'make';

	public $timestamps = false;

	public function country() {
		return $this->hasOne('App\Country');
	}

	public function models() {
		return $this->hasMany('App\Model');
	}

}
