<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;


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
Route::get('/inventory/edit/{id}',[InventoryController::class,'edit'])->name('inventory.edit');
Route::post('/inventory/edit',[InventoryController::class,'editSubmit'])->name('inventory.edit');
Route::get('/inventory/list/{id}',[InventoryController::class,'deletesubmit'])->name('inventory.delete');

//customer registration routes
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer/create',[CustomerController::class,'createSubmit'])->name('customer.create');

//customer login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');

//customer dashboard routes
Route::get('/customer/list',[CustomerController::class,'list'])->name('products.list');
Route::get('/customer/dashboard',[CustomerController::class,'dashboard'])->name('customer.dashboard');
Route::get('/customer/logout',[LoginController::class,'logout'])->name('customer.logout');

//admin login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');

//admin dashboard routes
Route::get('/admin/list',[InventoryController::class,'list'])->name('inventory.list');
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout',[LoginController::class,'logout'])->name('admin.logout');

//cart routes
Route::get('/products/addtocart/{id}',[CartController::class,'addtocart'])->name('products.addtocart');
Route::get('/products/emptycart',[CartController::class,'emptycart'])->name('products.emptycart');
Route::get('/products/viewcart',[CartController::class,'cart'])->name('products.viewcart');
Route::get('/products/checkout',[CartController::class,'checkout'])->name('products.checkout');
Route::post('/products/checkout',[CartController::class,'checkout'])->name('products.checkout');
Route::get('/products/myorders',[CustomerController::class,'myorders'])->name('products.myorders');
Route::get('/products/orderdetails/{id}',[CustomerController::class,'orderdetails'])->name('products.orderdetails');