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

Route::get("/register", function(){
    return redirect("/nova/register");
});

Route::get('/', function () {
    return redirect("/nova");
});

Route::get("/login", function(){
    return redirect("/nova/login");
})->name("login");

Route::get("/nova/register", function(){
    return view("auth.register");
});


Route::post("/register", "App\Http\Controllers\AdminController@store");
