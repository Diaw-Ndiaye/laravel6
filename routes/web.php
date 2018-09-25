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

Route::get('/register', function () {
    return view('register');
});
/*Route::post('/store', function () {
   return view('UserController@store');
});*/
Route::post('/store', [
		'as'=>'create.user',
		'uses'=>'UserController@store'
	]);
Route::get('/uploadfile','UploadfileController@index');
Route::post('/uploadfile',[
		'as'=>'create.upload',
		'uses'=>'UploadfileController@upload'
	]);
Route::get('/images-views',[
		'as'=>'all.image',
		'uses'=>'UploadfileController@getAllImages'
	]);
Route::resource('todo' , 'TodoController');

Route::get('/todos/edit/{id}',[
	'uses'=>'TodoController@edit',
	'as'=>'todo.edit'
]);
Route::post('/todos/update/{id}',[
	'uses'=>'TodoController@update',
	'as'=>'todo.update'
]);
Route::get('/todos',[
	'uses'=>'TodoController@index',
	'as'=>'todos'
]);