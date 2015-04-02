<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model {

	protected $table = 'models';

	public $timestamps = false;

	public function spec() {
		return $this->belongsToMany('Spec', 'specs_models', 'model_id', 'spec_id');
	}

}
