<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model {

	protected $table = 'specs';

	public $timestamps = false;

	public function models() {
		return $this->belongsToMany('App\Model', 'specs_models', 'spec_id', 'model_id');
	}

}
