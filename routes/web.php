<?php
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\auth\middleware\authenticate;

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
Route :: get('/', function()){
    if (auth::check()){
        return redirect ('/employee');
    }
    return redirect ('/login');
};

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('/login','loginController@index')->name('login');
Route::post('/login','LoginController@authenticate')->name('log in submit');
Route::get('/logout','LoginController@logout')->name('logout');
Route::get('/signup','RegisterController@index')->name('signup');
Route::post('/signup','RegisterController@create')->name('signup submit');
Route::get('/insert','StudInsertController@index')->name('student form');
Route::post('/creat','StudentInsertController@store')->name('student form create');
Route::get('/employee/add','EmployeeController@create')->name('employee form');
Route::post('/employee/add','employeeController@store')->name('emplyoee store')->name('employee store');
Route::get('/employee','employeeController@index')->name('employee table');

