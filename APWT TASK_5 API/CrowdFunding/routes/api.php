<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Login api


//Admin Dashboard Api
Route::get('/admin/Dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/UpdateProfile',[AdminController::class,'updateadmin']);
Route::post('/admin/UpdateProfile',[AdminController::class,'updateadminsubmit']);
Route::get('/admin/AddUser',[AdminController::class,'adduser']);
Route::post('/admin/Adduser',[AdminController::class,'register']);
Route::get('/admin/UserList',[AdminController::class,'userlist']);
Route::get('/admin/UserEdit/{id}',[AdminController::class,'edituser']);
Route::post('/admin/UserEdit',[AdminController::class,'updateuser']);
Route::get('/admin/UserDetail/{id}',[AdminController::class,'userdetail']);
Route::get('/admin/UserDelete/{id}',[AdminController::class,'userdelete']);
Route::get('/admin/Donors',[DonorController::class,'donors']);



//Project Api
Route::get('/admin/ProjectList',[ProjectController::class,'projectlist']);
Route::get('/admin/DonationDetails/{id}',[ProjectController::class,'donationdetails']);
Route::get('/admin/Donations/{id}',[ProjectController::class,'alldonations']);
Route::get('/admin/Fund/{id}',[ProjectController::class,'fund']);
Route::get('/admin/DonorList/{id}',[ProjectController::class,'donorlist']);
Route::get('/admin/ProjectStatus/{id}',[ProjectController::class,'changestatus']);
Route::post('/admin/ProjectStatus/',[ProjectController::class,'status']);