<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsModelsTable extends Migration {

	const TABLE_NAME = 'specs_models';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->integer('spec_id')->unsigned();
			$t->integer('model_id')->unsigned();

			$t->primary(array('spec_id','model_id'));

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
