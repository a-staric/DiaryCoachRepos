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

Route::get('/phpinfo', function () {
    return view('phpinfo');
});

Auth::routes();



// Route::group(['middleware' => ['auth']], function () {
//     Route::resource('student', 'StudentController')->names('student');
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/student/archive','Students\StudentController@archive')->name('student.archive');
Route::post('/student/recover/{student}','Students\StudentController@recover')->name('student.recover');

Route::group(['namespace' => 'Students', 'prefix' => ''], function(){

    Route::resource('student', 'StudentController')->names('student');


});


Route::group(['namespace' => 'Students', 'prefix' => ''], function(){

    Route::resource('competitionresult', 'CompetitionResultController')
    ->except(['index','show', 'edit', 'update'])
    ->names('competitionresult');

    Route::resource('competition', 'CompetitionController')
    ->names('competition');

    Route::resource('trainingkind', 'TrainingKindController')
    ->except(['show'])
    ->names('trainingkind');

    Route::resource('distance', 'DistanceController')
    ->except(['show'])
    ->names('distance');

    Route::resource('progress', 'StudentDistanceController')
    ->except(['create','update','edit'])
    ->names('progress');

    Route::resource('plan', 'PlanController')
    ->except(['show'])
    ->names('plan');


});
//Фото
Route::group(['namespace' => 'News', 'prefix' => ''], function(){

    Route::resource('photo', 'PhotoController')
    ->except(['show', 'edit', 'update'])
    ->names('photo');

    Route::resource('album', 'AlbumController')
    ->except(['create', 'store', 'edit', 'update', 'destroy'])
    ->names('album');

    Route::resource('news', 'NewsController')
    ->names('news');
});

