<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	protected $table = 'brands';

	public $timestamps = false;

	public function country() {
		return $this->hasOne('Country');
	}

}
