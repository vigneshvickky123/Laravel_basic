<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sampleController;
use App\Http\Controllers\TableController;

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
//route for laravel home page
Route::get('/', function () {
    return view('welcome');
});

//route for form data saving to db without using migrations
Route::get('simple',[sampleController::class,'index']);
Route::post('simple',[sampleController::class,'store']);

//route for retriving form data from db 
//Route::view('table','table');
Route::get('table',[TableController::class,'getData']);

//route for Global Middleware 
//Route::view('age','ageinput');
//Route::get('age', function () {
    //return view('ageinput');
//});
//Route::view('home','home');
//Route::view('noaccess','noaccess');

//Route for Group Middleware
//Route::group( ['middleware'=>['protectedpage']],function() {
  //  Route::get('age', function () {
   //     return view('ageinput');
   // });
   // Route::view('home','home');
   // Route::view('noaccess','noaccess');

//});

//Route for Route Middlewares
Route::get('age', function () {
    return view('ageinput');
});
Route::view('home','home')->middleware('protectedpage');
Route::view('noaccess','noaccess')->middleware('protectedpage');


