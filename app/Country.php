<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $table = 'countries';

	public $timestamps = false;

	public function brand() {
		return $this->belongsTo('Brand', 'brand_id');
	}

}
