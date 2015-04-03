<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration {

	const TABLE_NAME = 'models';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->string('name');
			$t->string('icon');
			$t->string('desc');

			$t->integer('make_id')->unsigned();

			$t->foreign('make_id')->references('id')->on('make')
											->onDelete('cascade')
											->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
