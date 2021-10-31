<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonorController;


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


//login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/admin/logout',[LoginController::class,'logout'])->name('logout');

//admin dashboard routes
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/Update Profile',[AdminController::class,'updateadmin'])->name('update.admin');
Route::post('/admin/Update Profile',[AdminController::class,'updateadminsubmit'])->name('update.admin');
Route::get('/admin/add user',[AdminController::class,'adduser'])->name('user.create');
Route::post('/admin/add user',[AdminController::class,'register'])->name('user.create');
Route::get('/admin/user list',[AdminController::class,'userlist'])->name('user.list');
Route::get('/admin/useredit/{id}',[AdminController::class,'edituser'])->name('user.edit');
Route::post('/admin/useredit',[AdminController::class,'updateuser'])->name('user.edit');
Route::get('/admin/userdetail/{id}',[AdminController::class,'userdetail'])->name('user.detail');
Route::get('/admin/userdelete/{id}',[AdminController::class,'userdelete'])->name('user.delete');
Route::get('/admin/Donors',[DonorController::class,'donors'])->name('all.donorlist');

//project routes
Route::get('/admin/project list',[ProjectController::class,'projectlist'])->name('project.list');
Route::get('/admin/Donation Details',[ProjectController::class,'donationdetails'])->name('donation.details');
Route::get('/admin/Donations/{id}',[ProjectController::class,'alldonations'])->name('all.donations');
Route::get('/admin/Fund/{id}',[ProjectController::class,'fund'])->name('total.fund');
Route::get('/admin/Donor List/{id}',[ProjectController::class,'donorlist'])->name('donor.list');




