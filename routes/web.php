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

Route::get('add/student','StudentController@addstudentview'); //add student information (view)
Route::post('add/student','StudentController@addstudent'); //post method add student


Route::get('add/dogood','LogController@adddogood'); //add log do good

Route::get('update/student/{id}','StudentController@editinformation'); //อย่าพึ่งทำ

Route::get('view/log/{id}','StudentController@viewstudent'); //อย่าพึ่งทำ

//หน้าmanagement
Route::get('management/student','StudentController@index');
Route::get('management/student/destroy/{id}','StudentController@destroy');


Route::get('management/student/edit/{id}','StudentController@editview');
Route::post('management/student/edits','StudentController@edit');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//แสดงผลข้อมูลทั้งหมด







