<?php

namespace App\Http\Controllers;

use App\Meals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IspisiSvaJela extends Controller
{
    //





    public function ispis(){
        $meals = DB::table('meals')->get();
        echo "<h1>Lista jela na hrvatskom jeziku</h1>";
        echo "<ol>";
        foreach ($meals as $meal) {
            echo "<li>";
            echo "<a href=''>".$meal->title."</a>";
            /*echo "<br>";

            echo $meal->description;

            echo "<br>";
            echo $meal->status;
            echo "<br>";*/
            echo "</li>";
        }
        echo "</ol>";
        return view('meals', ['meals' => $meals]);

}

   public function ispisi(Request $request){
        $id=$request->input('{$per_page}')->get();
        $results=DB::table('meals')->where('id', '<=', $id);
       echo "<h1>Lista jela na hrvatskom jeziku</h1>";
       echo "<ol>";
       foreach ($results as $meal) {
           echo "<li>";

           echo "<br>";

           echo $meal->description;

           echo "<br>";
           echo $meal->status;
           echo "<br>";
           echo "</li>";
       }
       echo "</ol>";
        return view('meals',['meals' => $meals]);
   }

}
