<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\empController;
use App\Http\Controllers\salesController;
use App\Models\Admin;
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

Route::get('/', function () {
    return view('welcome');
});

// Admin CRUD
Route::get('register',[AdminAuthController::class,'Admregister'])->name('register');
Route::post('AdminCreate',[AdminAuthController::class,'Admcreate'])->name('create');
Route::get('login', [AdminAuthController::class,'Admlogin'])->name('login');
Route::get('adminDashboard',[AdminAuthController::class, 'Admdashboard'])->name('Dashboard');


// Employee CRUD
Route::get('newEmp',[empController::class,'Eregister'])->name('Eregister');
Route::any('EmployeeCreate',[empController::class,'create'])->name('Ecreate');
Route::get('emplog',[empController::class,'Elogin'])->name('Elogin');
Route::get('profile',[empController::class,'profile'])->name('profile');

//Sale CRUD
Route::get('newsale',[salesController::class,'newsale'])->name('newSale');
Route::any('addsale',[salesController::class,'addsale'])->name('addsale');


//client CRUD
Route::get('addclient',[clientController::class,'clientform'])->name('addclient');



Route::get('/existing.blade.php', function () {
    return view('existing');
});

