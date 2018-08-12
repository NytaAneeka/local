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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'admin'], function () {
//    Courses
    Route::get('/admin/courses','admin\CoursesController@index')->name('courses');
    Route::get('/admin/courses/new','admin\CoursesController@newCourse')->name('newCourse');
    Route::post('/admin/courses/add','admin\CoursesController@addCourse')->name('addCourse');
    Route::get('/admin/courses/{id}','admin\CoursesController@getCourse')->name('getCourse');
    Route::post('/admin/courses/edit/{id}','admin\CoursesController@updateCourse')->name('updateCourse');
    Route::get('/admin/courses/delete/{id}','admin\CoursesController@deleteCourse')->name('deleteCourse');
//Groups
    Route::get('/admin/groups','admin\GroupsController@index')->name('groups');
    Route::get('/admin/groups/new','admin\GroupsController@newGroup')->name('newGroup');
    Route::post('/admin/groups/add','admin\GroupsController@addGroup')->name('addGroup');
    Route::get('/admin/groups/{id}','admin\GroupsController@getGroup')->name('getGroup');
    Route::post('/admin/groups/edit/{id}','admin\GroupsController@updateGroup')->name('updateGroup');
    Route::get('/admin/groups/delete/{id}','admin\GroupsController@deleteGroup')->name('deleteGroup');

});
