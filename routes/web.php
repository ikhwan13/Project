<?php

use App\Http\Controllers\ControllerSiswa;
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


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', "ControllerSiswa@index");
Route::get('edit/{id}', "ControllerSiswa@edit");
Route::get('show/{id}', "ControllerSiswa@show");
Route::get('create', "ControllerSiswa@create");
Route::post('store', "ControllerSiswa@store");
Route::post('update/{id}', "ControllerSiswa@update");
Route::get('destroy/{id}', "ControllerSiswa@destroy");
 