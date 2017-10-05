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
 	         		
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function(){
	return view('login');
});
Route::get('admin', function(){
	return view('admin');
});

// Get info user
Route::get('webbanhang/{user}', function ($user){
	return "<h1>" . $user. " welcome to website </h1>";
})->where(['user' => '[a-zA-Z]{3,15}+']);

// Dinh Danh
route::get('routes01', ['as' => 'iRoute01', function(){
	return 'Routes so mot';
}]);

route::get('routes02', function(){
	echo 'Routes so hai';
})->name('iRoute02');

route::get('/myroutes', function(){
	return redirect()->route('iRoute02');
});

// Group

route::group(['prefix' => 'iGroup'], function(){
	route::get('class01',function(){
		echo 'Class Laravel PHP 01';
	});
	route::get('class02',function(){
		echo 'Class Laravel PHP 02';
	});
	route::get('class03',function(){
		echo 'Class Laravel PHP 03';
	});
});

// Route::get('/string','HomeController@index');
// Route::get('/array',['name'=>'get.array','uses'=>'HomeController@index']);
