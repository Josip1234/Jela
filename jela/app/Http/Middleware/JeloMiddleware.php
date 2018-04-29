<?php

namespace App\Http\Middleware;

use Closure;
include 'C:\xampp\htdocs\Jela\jela\vendor\fzaninotto\faker\src\autoload.php';
class JeloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	
    public function handle($request, Closure $next,$jelo)
    {    
		$fak=Faker\Factory::create(); 
	    $faker=$fak->text;
		
		echo $faker;
		
        return $next($request);
    }
}
