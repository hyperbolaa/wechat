<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        //$value = config('app.timezone');
        //$value = app()->environment();

        return view('welcome');
    });

    Route::post('foo/bar', function () {
        //
    });

    Route::put("foo/bar", function () {
        //
    });

    Route::delete("foo/bar", function () {
        //
    });

    Route::get("user/{id}", function () {
        //
    });

    Route::get("user/{name?}", function ($name = null) {
        //
    });

    Route::get("user/{name?}", function ($name = "yuchong") {
        //
    });

    Route::get('user/{id}', function ($id) {

    })
        ->where("id", '[0-9]+');

});
