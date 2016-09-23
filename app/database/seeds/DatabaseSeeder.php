<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('CategoryTableSeeder');
	}

}
/**
* 
*/
class CategoryTableSeeder extends Seeder
{
	
	public function run()
	{
		$faker=Faker\factory::create('en_US');

		DB::table('categories')->truncate();

		foreach (range(1,7) as $index)
		 {
			$categoryName=$faker->name;

		DB::table('categories')->insert([
			'category_name'=>$categoryName,
			'slug'=>Str::slug($categoryName),
			'category_status'=>$faker->boolean(40)
			]);
		}

	}
}
