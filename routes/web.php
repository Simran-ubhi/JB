<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\empController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\SearchController;
use App\Models\Admin;
use App\Models\Clients;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Login;

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

Route::get('/',[SearchController::class,'home'])->name('home');
Route::any('numsearch',[SearchController::class,'search'])->name('numsearch');


// Admin CRUD


Route::get('login', [AdminAuthController::class,'Admlogin'])->name('login');
Route::any('logging',[AdminAuthController::class,'Adminlogin'])->name('logging');
Route::get('logout',[AdminAuthController::class,'logout'])->name('logout');


Route::group(['Middleware'=> ['auth','adminauth']], function(){
    Route::get('register',[AdminAuthController::class,'Admregister'])->name('register');
    Route::post('AdminCreate',[AdminAuthController::class,'Admcreate'])->name('create');
    Route::get('adminDashboard',[AdminAuthController::class,'dashboard'])->name('Dashboard');
    Route::get('newEmp',[empController::class,'Eregister'])->name('Eregister');
    Route::any('EmployeeCreate',[empController::class,'create'])->name('Ecreate');
});


// Employee CRUD


Route::get('emplog',[empController::class,'Elogin'])->name('Elogin');
Route::get('profile',[empController::class,'profile'])->name('profile');
Route::any('empLogin',[empController::class,'empLogin'])->name('emplogin');
Route::get('elogout',[empController::class,'elogout'])->name('elogout');
Route::get('employeelist',[empController::class,'employeeslist'])->name('employeeslist');

//Sale CRUD
Route::get('newsaleform',[salesController::class,'newsaleform'])->name('newSale');
Route::any('addsale',[salesController::class,'addsale'])->name('addsale');


//client CRUD
Route::get('addclient',[clientController::class,'clientform'])->name('addclient');
Route::any('client',[clientController::class,'addclient'])->name('createclient');



Route::get('existing', [SearchController::class, 'search'])->name('existing');


Route::get('clients',[clientController::class,'clientsindex'])->name('clientsindex');