<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $table = 'countries';

	public $timestamps = false;

	public function brand() {
		return $this->belongsTo('App\Brand', 'brand_id');
	}

}
