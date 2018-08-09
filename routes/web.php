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


Route::get('/test1', function () {
    return 'Hello';
});

Route::get('/some', 'TestController@someMethod');
Route::get('/some2/{name}/{surname?}', 'TestController@someMethod2');
Route::get('/get/byid/{id}', 'TestController@someMethod2')->where('id', '[0-9]+');

Route::group(['namespace'=>'Admin', 'prefix'=>'/admin'], function(){
    Route::get('post/list','PostController@listPosts');
    Route::post('post/add','PostController@addPosts');
});

Route::get('/post','TestController@showPosts');


//своеобразная реализация catch ALL
//Route::any('{any}',function ()
//{
//    return 'Такой страницы нет';
//});