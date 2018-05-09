<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IspisiSvaJela extends Controller
{
    //
    public function ispis(){
        $meals=DB::select('select * from meals');
        return view('meals',['meals'=>$meals]);
    }
}
