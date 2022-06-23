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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('book/edit', function () {
//    return view('book.edit');
//})->name('book.edit');
//Route::get('book.index', function () {
//    return view('book.index');
//})->name('book.index');
//Route::get('book/new', function () {
//    return view('book.new');
//})->name('book.new');
//
//Route::group(['prefix' => 'Classroom'], function (){
//    Route::get('', [
//        'uses' => 'ClassroomController@index',
//        'as' => 'Classroom.index'
//    ]);
//
//    Route::get('create',[
//        'uses'=>'ClassroomController@create',
//        'as'=>'Classroom.create'
//    ]);
//
//    Route::post('create',[
//        'uses'=>'ClassroomController@store',
//        'as'=>'Classroom.store'
//    ]);
//    Route::get('update/{id}',[
//        'uses'=>'ClassroomController@edit',
//        'as'=>'Classroom.edit'
//    ]);
//    Route::post('update/{id}',[
//            'uses'=>'ClassroomController@update',
//            'as'=>'Classroom.update'
//        ]);
//    Route::get('delete/{id}',[
//        'uses'=>'ClassroomController@confirm',
//        'as'=>'Classroom.confirm'
//    ]);
//    Route::post('delete/{id}',[
//        'uses'=>'ClassroomController@destroy',
//        'as'=>'Classroom.destroy'
//        ]);
//
//});
//Route::group(['prefix' => 'Teacher'], function (){
//    Route::get('', [
//        'uses' => 'TeacherController@Teacher',
//        'as' => 'Teacher.index'
//    ]);
//
//    Route::get('create1',[
//        'uses'=>'TeacherController@create1',
//        'as'=>'Teacher.create1'
//    ]);
//
//    Route::post('create1',[
//        'uses'=>'TeacherController@store1',
//        'as'=>'Teacher.store1'
//    ]);
//    Route::get('update/{id}',[
//        'uses'=>'TeacherController@edit1',
//        'as'=>'Teacher.edit'
//    ]);
//    Route::post('update/{id}',[
//        'uses'=>'TeacherController@update1',
//        'as'=>'Teacher.update'
//    ]);
//    Route::get('delete/{id}',[
//        'uses'=>'TeacherController@confirm1',
//        'as'=>'Teacher.confirm'
//    ]);
//    Route::post('delete/{id}',[
//        'uses'=>'TeacherController@destroy1',
//        'as'=>'Teacher.destroy'
//    ]);
//});
//Route::group(['prefix' => 'Student'], function (){
//    Route::get('', [
//        'uses' => 'StudentController@Student',
//        'as' => 'Student.index'
//    ]);
//
//    Route::get('create2',[
//        'uses'=>'StudentController@create2',
//        'as'=>'Student.create2'
//    ]);
//    Route::post('create2',[
//        'uses'=>'StudentController@store2',
//        'as'=>'Student.store2'
//    ]);
//    Route::get('update/{id}',[
//        'uses'=>'StudentController@edit2',
//        'as'=>'Student.edit'
//    ]);
//    Route::post('update/{id}',[
//        'uses'=>'StudentController@update2',
//        'as'=>'Student.update'
//    ]);
//    Route::get('delete/{id}',[
//        'uses'=>'StudentController@confirm2',
//        'as'=>'Student.confirm'
//    ]);
//    Route::post('delete/{id}',[
//        'uses'=>'StudentController@destroy2',
//        'as'=>'Student.destroy'
//    ]);
//});
//
//Route::group(['prefix'=>'classRepos'],function(){
//    Route::get('', [
//        'uses' => 'ClassroomControllerWithRepos@index',
//        'as' => 'class.index'
//    ]);
//
//    Route::get('show/{id}',[
//        'uses' => 'ClassroomControllerWithRepos@show',
//        'as' => 'class.show'
//    ]);
//
//    Route::get('create',[
//        'uses' => 'ClassroomControllerWithRepos@create',
//        'as' => 'class.create'
//    ]);
//
//    Route::post('create',[
//        'uses' => 'ClassroomControllerWithRepos@store',
//        'as' => 'class.store'
//    ]);
//
//    Route::get('update/{id}',[
//        'uses' => 'ClassroomControllerWithRepos@edit',
//        'as' => 'class.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'ClassroomControllerWithRepos@update',
//        'as' => 'class.update'
//    ]);
//
//    Route::get('delete/{id}', [
//        'uses' => 'ClassroomControllerWithRepos@confirm',
//        'as' => 'class.confirm'
//    ]);
//
//    Route::post('delete/{id}',[
//        'uses' => 'ClassroomControllerWithRepos@destroy',
//        'as' => 'class.destroy'
//    ]);
//});
//
//Route::group(['prefix'=>'studentRepos'],function(){
//    Route::get('', [
//        'uses' => 'StudentControllerWithRepos@index',
//        'as' => 'student.index'
//    ]);
//
//    Route::get('show/{id}',[
//        'uses' => 'StudentControllerWithRepos@show',
//        'as' => 'student.show'
//    ]);
//
//    Route::get('create',[
//        'uses' => 'StudentControllerWithRepos@create',
//        'as' => 'student.create'
//    ]);
//
//    Route::post('create',[
//        'uses' => 'StudentControllerWithRepos@store',
//        'as' => 'student.store'
//    ]);
//
//    Route::get('update/{id}',[
//        'uses' => 'StudentControllerWithRepos@edit',
//        'as' => 'student.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'StudentControllerWithRepos@update',
//        'as' => 'student.update'
//    ]);
//
//    Route::get('delete/{id}', [
//        'uses' => 'StudentControllerWithRepos@confirm',
//        'as' => 'student.confirm'
//    ]);
//
//    Route::post('delete/{id}',[
//        'uses' => 'StudentControllerWithRepos@destroy',
//        'as' => 'student.destroy'
//    ]);
//});
//Route::group(['prefix'=>'teacherRepos'],function(){
//    Route::get('', [
//        'uses' => 'TeacherControllerWithRepos@index',
//        'as' => 'teacher.index'
//    ]);
//
//    Route::get('show/{id}',[
//        'uses' => 'TeacherControllerWithRepos@show',
//        'as' => 'teacher.show'
//    ]);
//
//    Route::get('create',[
//        'uses' => 'TeacherControllerWithRepos@create',
//        'as' => 'teacher.create'
//    ]);
//
//    Route::post('create',[
//        'uses' => 'TeacherControllerWithRepos@store',
//        'as' => 'teacher.store'
//    ]);
//
//    Route::get('update/{id}',[
//        'uses' => 'TeacherControllerWithRepos@edit',
//        'as' => 'teacher.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'TeacherControllerWithRepos@update',
//        'as' => 'teacher.update'
//    ]);
//
//    Route::get('delete/{id}', [
//        'uses' => 'TeacherControllerWithRepos@confirm',
//        'as' => 'teacher.confirm'
//    ]);
//
//    Route::post('delete/{id}',[
//        'uses' => 'TeacherControllerWithRepos@destroy',
//        'as' => 'teacher.destroy'
//    ]);
//});

Route::group(['prefix' => 'Event'], function () {
    Route::get('', [
        'uses' => 'CategoryController@index',
        'as' => 'Event.index'
    ]);

    Route::get('create', [
        'uses' => 'CategoryController@create',
        'as' => 'Event.create'
    ]);

    Route::post('create', [
        'uses' => 'CategoryController@store',
        'as' => 'Event.store'
    ]);

    Route::get('update/{eventid}', [
        'uses' => 'CategoryController@edit',
        'as' => 'Event.edit'
    ]);

    Route::post('update/{eventid}', [
        'uses' => 'CategoryController@update',
        'as' => 'Event.update'
    ]);

    Route::get('delete/{eventid}', [
        'uses' => 'CategoryController@confirm',
        'as' => 'Event.confirm'
    ]);
    Route::post('delete/{eventid}', [
        'uses' => 'CategoryController@destroy',
        'as' => 'Event.destroy'
    ]);
});

Route::group(['prefix' => 'Cake'], function () {
    Route::get('', [
        'uses' => 'CakeController@index',
        'as' => 'Cake.index'
    ]);

    Route::get('show/{cakeid}',[
        'uses' => 'CakeController@show',
        'as' => 'Cake.show'
    ]);

    Route::get('create', [
        'uses' => 'CakeController@create',
        'as' => 'Cake.create'
    ]);

    Route::post('create', [
        'uses' => 'CakeController@store',
        'as' => 'Cake.store'
    ]);

    Route::get('update/{cakeid}', [
        'uses' => 'CakeController@edit',
        'as' => 'Cake.edit'
    ]);

    Route::post('update/{cakeid}', [
        'uses' => 'CakeController@update',
        'as' => 'Cake.update'
    ]);

    Route::get('delete/{cakeid}', [
        'uses' => 'CakeController@confirm',
        'as' => 'Cake.confirm'
    ]);
    Route::post('delete/{cakeid}', [
        'uses' => 'CakeController@destroy',
        'as' => 'Cake.destroy'
    ]);

});

Route::group(['prefix' => 'Admin'], function () {
    Route::get('', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);
    Route::get('update/{admin}', [
        'uses' => 'AdminController@edit',
        'as' => 'Admin.edit'
    ]);

    Route::post('update/{admin}', [
        'uses' => 'AdminController@update',
        'as' => 'Admin.update'
    ]);

});
