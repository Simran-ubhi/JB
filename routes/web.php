<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
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

Route::get('/login', [AdminAuthController::class,'login']);
Route::get('/register',[AdminAuthController::class, 'register']);


Route::get('/existing.blade.php', function () {
    return view('existing');
});

Route::get('/newclient.blade.php', function () {
    return view('newclient');
});

Route::get('/newEmp.blade.php', function () {
    return view('admin/newEmp');
});

Route::get('/empLogin.blade.php', function () {
    return view('employee/empLogin');
});

Route::get('/profile.blade.php', function () {
    return view('employee/profile');
});

Route::get('/registerAdmin',function(){
    return view('admin/newAdmin');
});

Route::get('/newsale',function(){
    return view('employee/newSale');
});

Route::get('/newcust',function(){
    return view('employee/newCust');
});