<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once 'C:/xampp/htdocs/Jela/jela/vendor/fzaninotto/faker/src/autoload.php';
require_once 'C:/xampp/htdocs/Jela/jela/vendor/fzaninotto/faker/src/Faker/Factory.php';

class jelo extends Controller
{
    //
	
	public function jelo(){
		
		$faker = Factory::create();
		echo $faker->name;
	}
}
