<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
	
	$links= \App\Link::all();
	
    return view('welcome',['links'=>$links]);
});

Route::get('ID/{id}',function($id){
echo 'ID: '.$id;
});
Route::get('/user/{name?}',function($name = 'Josip Bošnjak'){
echo "Name: ".$name;
});

Route::get('/usercontroller/path',['middleware'=>'First',
								  'uses'=>'UserController@showPath']);

Route::resource('my','MyController');
class MyClass{
	public $foo='bar';
    
}
Route::get("/myclass",'ImplicitController@index');
Route::get('/foo/bar','UriController@index');
Route::get('/register',function(){
	return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
Route::get('/jelo','jelo@jelo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/meals',function (){
    return view('meals');
});
*/
Route::get('/meals','IspisiSvaJela@ispis');