<?php

use Illuminate\Support\Facades\Route;
use App\Student;

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
Route::get('insert', 'studentController@show');
Route::post('create', 'studentController@insert');
Route::get('view','studentController@view');
Route::get('delete-records','studentController@index');
Route::get('delete/{id}','studentController@destroy');
Route::get('edit-records','studentController@update');
Route::get('edit/{id}','studentController@updateShow');
Route::post('edit/{id}','studentController@edit');
Route::get('softdelete','studentController@softindex');
Route::get('softdelete/{id}','studentController@softdestroy');



// Route::get('/find',function(){
//     $students = Student::all();
//     return $students;

// });


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/insert',function(){
//     DB::insert('insert into students(name,address,graduation) values(?,?,?)',['Rumi','Godolia','MBA']);
// });

// Route::get('/read',function(){
// $res=DB::select('select * from students');
// return $res;
// });

// Route::get('/update',function(){
// $update=DB::update('update students set name="Sreelakshmi" where id=1');
// return $update;
// });

// Route::get('/delete',function(){
// $delete=DB::delete('delete from students where id = 2');
// return $delete;
// });