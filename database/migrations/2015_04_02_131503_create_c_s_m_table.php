<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCSMTable extends Migration {

	const TABLE_NAME = 'c_s_m';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->integer('company_id')->unsigned();
			$t->integer('spec_id')->unsigned();
			$t->integer('model_id')->unsigned();

			$t->foreign('company_id')->references('id')->on('companies')
											->onDelete('cascade')
											->onUpdate('no action');
			$t->foreign('spec_id')->references('id')->on('specs')
											->onDelete('cascade')
											->onUpdate('no action');
			$t->foreign('model_id')->references('id')->on('models')
											->onDelete('cascade')
											->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
