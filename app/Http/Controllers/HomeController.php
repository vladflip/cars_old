<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	public function index()
	{
		$specs = \App\Spec::all();

		return view('home')->with('specs', $specs);
	}

}
