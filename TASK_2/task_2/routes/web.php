<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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
Route::get('/login',[PagesController::class,'login']);

Route::get('/contact',[PagesController::class,'contact']);

//studentcontroller
Route::get('/registration',[StudentController::class,'registration'])->name('registration');
Route::post('/registration',[StudentController::class,'registrationsubmit'])->name('registration');