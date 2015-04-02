<?php namespace App;

use Illuminate\Database\Eloquent\Model as ModelE;

class Model extends ModelE {

	protected $table = 'models';

	public $timestamps = false;

	public function spec() {
		return $this->belongsToMany('App\Spec', 'specs_models', 'model_id', 'spec_id');
	}

}
