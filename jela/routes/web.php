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
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
Route::get('/',function (){
   return ('welcome');
});
/*
Route::get('/hello',function (){
   echo '<html>
<head>
<title>Laravel</title>
<style>
html,body{
height:100%;
}
body{
margin:0;
padding:0;
width:100%;
display: table;
font-weight: 100;
font-size: 20px;
font-family: Lato;

}
.container{
text-align: center;
display: table-cell;
vertical-align: middle;

}
.content{
text-align: center;
display: inline-block;
}
.title{
font-size: 110px;
}


</style>
</head>
<body>
<div id="container">
<div class="content">
<div class="title"><h1>Hello, Dear Reader</h1></div>
<div class="container">
<div class="content">How are you? I hope you would love this book.</div>
</div>
</div>
</div>

</body>


</html>';
});
*/
Route::get('/meals',function (){
    return view('meals');
});

Route::get('/meals','IspisiSvaJela@ispis');
Route::get('/meals/{per_page}','IspisiSvaJela@ispisi');
/*
Route::get('meals/{per_page?}',function ($per_page=null){
    return $per_page;
});
Route::get('meals/{per_page?}', function ($per_page = 5) {
     return $per_page;
 });

Route::get('/hello/{reader}',function ($name){
   echo 'Hello'.$name;
});
/*
Route::any('any',function (){
   return 'Anything is possible if you try hard';
});
//Route::when('*','csrf',['post','put','patch']);

Route::get('newpage','MyController@returningASimplePage');

*/

//Route::get('/meals/{count}','IspisiSvaJela@ispisJelaSaParametrima');