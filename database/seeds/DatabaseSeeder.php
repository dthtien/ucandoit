<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShoeBrandSeeder::class);
    }
}

class ShoeBrandSeeder extends Seeder {
	public function run() {
		DB::table('shoe_brand')->insert([
			['name_shoe_brand' => 'Adidas'],
			['name_shoe_brand' => 'Nike'],
			['name_shoe_brand' => 'Converse'],
			['name_shoe_brand' => 'Vans'],
			['name_shoe_brand' => 'Palladium'],
			['name_shoe_brand' => 'Reebok'],
			['name_shoe_brand' => 'Puma'],
			['name_shoe_brand' => 'New Balance'],
			['name_shoe_brand' => 'Asics'],
			['name_shoe_brand' => 'Bitis']
			]);
	}
}
