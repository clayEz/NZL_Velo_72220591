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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['guest']], function () {
    Route::get("/", "PageController@login")->name('login');
    Route::post("/login", "AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function () {
    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/user", "PageController@edituser");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get("/home", "PageController@home");
    Route::get("/sepeda", "PageController@sepeda");
    Route::get("/sepeda/form-add", "PageController@addsepeda");
    Route::post("/save", "PageController@savesepeda");
    Route::get("/form-edit/{id}", "PageController@editsepeda");
    Route::put("/update/{id}", "PageController@updatesepeda");
    Route::get("/delete/{id}", "PageController@deletesepeda");
});