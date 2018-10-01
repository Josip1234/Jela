<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    /* UserController treba dohvatiti korisnika iz izvora podataka
     *injektiramo servis koji će dohvatiti korisnika iz izvora podataka
     * Implementacija repositorija korinsika
     * @var UserRepository
     * */
protected $users;
/*
 * Kreiraj novu instancu kontrollera
 * @param UserRepository $users
 * @return void
 *
 * */
public function __construct(UserRepository $users)
{
    $this->users=$users;
}
/*
 * Pokaži profil za zadanog korisnika
 * @param int $id
 * @return response
 *
 *
 * **/
public function show($id){
    $user=$this->users->find($id);
    return view('user.profile',['user'=>$user]);
}

}
