<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $table = 'companies';

	public function user() {
		return $this->belongsTo('App\User', 'user_id');
	}

	public function specs() {
		return $this->belongsToMany(
			'App\Spec', 'c_s_m', 
			'company_id', 'spec_id')
			->withPivot('model_id');
	}

}
