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
//Lectures
    Route::get('/admin/lectures','admin\LecturesController@index')->name('lectures');
    Route::get('/admin/lectures/new','admin\LecturesController@newLecture')->name('newLecture');
    Route::post('/admin/lectures/add','admin\LecturesController@addLecture')->name('addLecture');
    Route::get('/admin/lectures/{id}','admin\LecturesController@getLecture')->name('getLecture');
    Route::post('/admin/lectures/edit/{id}','admin\LecturesController@updateLecture')->name('updateLecture');
    Route::get('/admin/lectures/delete/{id}','admin\LecturesController@deleteLecture')->name('deleteLecture');
//Files
    Route::get('/admin/files','admin\FilesController@index')->name('files');
    Route::post('/admin/files/add','admin\FilesController@addFiles')->name('addFiles');
    Route::get('/admin/files/delete/{id}','admin\FilesController@deleteFile')->name('deleteFile');
    Route::get('/admin/files/toggle/{id}','admin\FilesController@toggleShow')->name('toggleShow');
    Route::get('/admin/files/edit/{id}','admin\FilesController@getFile')->name('getFile');
    Route::post('/admin/files/update/{id}','admin\FilesController@updateFile')->name('updateFile');

});
