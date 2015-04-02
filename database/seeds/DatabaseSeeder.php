<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserSeeder');

		$this->call('CompanySeeder');

		$this->call('SpecSeeder');

		$this->call('CountrySeeder');

		$this->call('BrandSeeder');

		$this->call('ModelSeeder');

		$this->call('CSMSeeder');
	}

}

class FF {
	public static function get() {
		return Faker\Factory::create();
	}
}

class UserSeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for($i=0; $i < 10; $i++){

			App\User::create([
					'login' => $f->userName,
					'password' => $f->password,
					'name' => $f->name(),
					'is_admin' => 0,
					'confirmed' => 1,
					'email_subscr' => 1
				]);

		}

	}

}

class CompanySeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for($i=0; $i < 10; $i++){

			App\Company::create([
				'user_id' => $i+1,
				'name' => $f->company,
				'description' => $f->paragraph(5),
				'phone' => $f->phoneNumber,
				'address' => $f->address
			]);

		}

	}

}

class SpecSeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for($i=0; $i < 10; $i++){

			App\Spec::create([
				'name' => $f->cityPrefix,
				'icon' => $f->imageUrl(),
				'desc' => $f->paragraph(2)
			]);

		}

	}

}

class CountrySeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for($i=0; $i < 10; $i++){

			App\Country::create([
				'name' => $f->country,
				'icon' => $f->imageUrl()
			]);

		}

	}

}

class BrandSeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for($i=0; $i < 10; $i++){

			App\Brand::create([
				'name' => $f->cityPrefix,
				'icon' => $f->imageUrl(),
				'desc' => $f->paragraph(2),
				'country_id' => $i+1
			]);

		}

	}

}

class ModelSeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for($i=0; $i < 10; $i++){

			$m = App\Model::create([
				'name' => $f->cityPrefix,
				'icon' => $f->imageUrl(),
				'desc' => $f->paragraph(2),
				'brand_id' => $i+1
			]);

			$m->spec()->attach($i+1);
		}

	}

}

class CSMSeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for($i=0; $i < 10; $i++){

			$c = App\Company::find($i+1);
			// $s = Spec::find($i+1);
			// $m = $s->models->first();

			$c->specs()->attach($i+1, ['model_id' => $i+1]);
		}

	}

}