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
Route::get('/phpinfo', function () {
    return view('phpinfo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Воспитанники
Route::group(['namespace' => 'Students', 'prefix' => ''], function(){

    Route::resource('student', 'StudentController')->names('student');

});
//Достижения
Route::group(['namespace' => 'Students', 'prefix' => ''], function(){

    Route::resource('progress', 'StudentDistanceController')
    ->except(['create','update','edit'])
    ->names('progress');

});
//Дистанции
Route::group(['namespace' => 'Students', 'prefix' => ''], function(){

    Route::resource('distance', 'DistanceController')
    ->except(['show'])
    ->names('distance');

});

//Соревнования и результаты
Route::group(['namespace' => 'Students', 'prefix' => ''], function(){

    Route::resource('competitionresult', 'CompetitionResultController')
    ->names('competitionresult');

    Route::resource('competition', 'CompetitionController')
    ->names('competition');




});
//Фото
Route::group(['namespace' => 'News', 'prefix' => ''], function(){

    Route::resource('photo', 'PhotoController')
    ->names('photo');

});

