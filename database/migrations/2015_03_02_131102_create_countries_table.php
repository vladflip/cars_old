<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	const TABLE_NAME = 'countries';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->string('name');
			$t->string('icon');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
