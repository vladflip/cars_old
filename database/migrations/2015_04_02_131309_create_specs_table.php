<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration {

	const TABLE_NAME = 'specs';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->string('name');
			$t->string('icon');
			$t->string('desc');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
