<?php

use Illuminate\Support\Facades\Route;

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
//
//Route::get('/about', function(){
//    return "About Page";
//});
//
//Route::get('/contact', function(){
//    return "Contact Page";
//});
//
//Route::get('/post/{id}/{name}', function($id,$name){
//    return "This is post number ".$id. " ". $name;
//});
//
//Route::get('admin/posts/example', array('as' =>'admin.home',function(){
//    $url = route("admin.home");
//    return "This url is ". $url;
//}));

//Route::get('/', [EdwinsController::class, 'index']);

//Route::get('/post/{id}',[App\Http\Controllers\PostController::class,'index']);

Route::resource('posts','App\Http\Controllers\PostController');

Route::get('/contact','App\Http\Controllers\PostController@contact');

Route::get('post/{id}/{name}/{password}', 'App\Http\Controllers\PostController@showPost');
