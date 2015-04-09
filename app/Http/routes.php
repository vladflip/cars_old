<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('get-{id}', function($id){
	if($id == 'makes'){
		$makes = App\Make::select('name')->get();
		return response()->json($makes);
	} elseif ($id == 'models') {
		$d = Input::get('make');
	$id = App\Make::where('name', $d)->pluck('id');
		$models = App\Model::select('name')->where('make_id', $id)->get();
		// return response()->json($models);
		return $models;
	}
});
