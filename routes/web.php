<?php

use App\Http\Controllers\PostController;
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

// Route::get('/try', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return 'about us';
// });


// Route::get('/about/{id}/{company}', function ($id, $comp) {
//     return 'about us'.$id.'try'.$comp;
// });


Route::get('/', 'PagesController@index');
Route::get('/home','PagesController@index');
Route::get('/about','PagesController@about');

Route::get('/try/{id}', 'PagesController@try');

Route::get('/employee', 'EmployeeController@index');
Route::get('/add-employee', 'EmployeeController@create');
Route::post('/store-employee', 'EmployeeController@store');
Route::get('/edit-employee/{id}', 'EmployeeController@edit');
Route::put('/update-employee/{id}', 'EmployeeController@update');
// Route::get('/delete-employee/{id}', 'EmployeeController@delete');

Route::delete('/delete-employee/{id}', 'EmployeeController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// this is for adding the middleware to the landing page so that the user cannot post without signing in first
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('posts', 'PostController');
});
