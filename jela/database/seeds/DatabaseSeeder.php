<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *use Faker\Factory as Faker;
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(MealSeeder::class);
        //generate fake data here
          /*


faker create
insert into database 
DB::table('users')->insert(['name'=>$faker->name,'pass'=>bcrypt('secret')

*/
        // $this->call(UsersTableSeeder::class);
		//$this->call(LinksTableSeeder::class);
		//$faker = Faker\Factory::create();

		
    }
}
