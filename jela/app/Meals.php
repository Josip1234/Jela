<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    //
public function ingredients(){
    return $this->hasMany('App\Ingredients');
}
    public function category(){
        return $this->hasOne('App\Category');
    }
    public function tags(){
    return $this->hasMany('App\Tags');
    }

}
