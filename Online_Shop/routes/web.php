<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CustomerController;


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
Route::get('/', [PagesController::class,'home'])->name('home');

//inventory routes
Route::get('/inventory/create',[InventoryController::class,'create'])->name('inventory.create');
Route::post('/inventory/create',[InventoryController::class,'createSubmit'])->name('inventory.create');
Route::get('/inventory/list',[InventoryController::class,'list'])->name('inventory.list');
Route::get('/inventory/edit/{id}/{name}',[InventoryController::class,'edit'])->name('inventory.edit');
Route::post('/inventory/edit',[InventoryController::class,'editSubmit'])->name('inventory.edit');
Route::get('/inventory/list/{id}',[InventoryController::class,'deletesubmit'])->name('inventory.delete');

//customer routes
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer/create',[CustomerController::class,'createSubmit'])->name('customer.create');

//login routes
Route::get('/customer/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/customer/create',[CustomerController::class,'loginSubmit'])->name('customer.login');

//dashboard routes