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
    Route::get('admin/groups/email/{id}','admin\GroupsController@getEmail')->name('getGroupEmail');
    Route::post('admin/groups/email/send/{id}','admin\GroupsController@sendEmail')->name('sendGroupEmail');
//Lectures
    Route::get('/admin/lectures','admin\LecturesController@index')->name('lectures');
    Route::get('/admin/lectures/new','admin\LecturesController@newLecture')->name('newLecture');
    Route::post('/admin/lectures/add','admin\LecturesController@addLecture')->name('addLecture');
    Route::get('/admin/lectures/{id}','admin\LecturesController@getLecture')->name('getLecture');
    Route::post('/admin/lectures/edit/{id}','admin\LecturesController@updateLecture')->name('updateLecture');
    Route::get('/admin/lectures/delete/{id}','admin\LecturesController@deleteLecture')->name('deleteLecture');
    Route::get('/admin/lectures/details/{id}','admin\LecturesController@lectureDetails')->name('lectureDetails');
//Files
    Route::get('/admin/files','admin\FilesController@index')->name('files');
    Route::post('/admin/files/add','admin\FilesController@addFiles')->name('addFiles');
    Route::get('/admin/files/delete/{id}','admin\FilesController@deleteFile')->name('deleteFile');
    Route::get('/admin/files/toggle/{id}','admin\FilesController@toggleShow')->name('toggleShow');
    Route::get('/admin/files/edit/{id}','admin\FilesController@getFile')->name('getFile');
    Route::post('/admin/files/update/{id}','admin\FilesController@updateFile')->name('updateFile');
//Students
    Route::get('admin/students','admin\StudentsController@index')->name('students');
    Route::get('admin/students/unconfirmed','admin\StudentsController@unconfirmedStudents')->name('unconfirmed');
    Route::get('admin/students/add','admin\StudentsController@addStudent')->name('addStudent');
    Route::get('admin/students/confirm/{id}','admin\StudentsController@confirmStudent')->name('confirm');
    Route::post('admin/students/create','admin\StudentsController@create')->name('createStudent');
    Route::get('admin/students/{id}', 'admin\StudentsController@getStudent')->name('getStudent');
    Route::post('admin/students/update/{id}','admin\StudentsController@updateStudent')->name('updateStudent');
    Route::get('admin/students/delete/{id}','admin\StudentsController@deleteStudent')->name('deleteStudent');
    Route::get('admin/students/email/{id}','admin\StudentsController@getEmail')->name('getEmail');
    Route::post('admin/students/email/send','admin\StudentsController@sendEmail')->name('sendEmail');
});
