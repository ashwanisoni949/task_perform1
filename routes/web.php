<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginController;

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
    return view('index');
})->name('login_page');

// Route::group(['middleware' => 'auth'], function () {
Route::get('form-industry',[UserLoginController::class,'industryform'])->name('form-industry');
Route::post('custsom-login',[UserLoginController::class,'login'])->name('custsom-login');
Route::post('add-industry',[UserLoginController::class,'industry'])->name('add-industry');
Route::get('show-industry',[UserLoginController::class,'Showindustry'])->name('show-industry');

// category route 
Route::get('category-form',[UserLoginController::class,'CategoryForm'])->name('category-form');
Route::post('add-category',[UserLoginController::class,'AddCategory'])->name('add-category');
Route::get('show-category',[UserLoginController::class,'ShowCategory'])->name('show-category');


//primary route
Route::get('primary-form',[UserLoginController::class,'PrimaryForm'])->name('primary-form');
Route::post('add-primary',[UserLoginController::class,'AddPrimary'])->name('add-primary');
Route::get('show-primary',[UserLoginController::class,'ShowPrimary'])->name('show-primary');

//foriegn route
Route::get('add-foriegn/{id}',[UserLoginController::class,'AddForiegn'])->name('add-foriegn');
Route::post('add-foriegn_data',[UserLoginController::class,'AddForiegnData'])->name('add-foriegn_data');

Route::get('show-foriegn/{id}',[UserLoginController::class,'ShowForiegn'])->name('show-foriegn');
Route::get('logout',[UserLoginController::class,'logout'])->name('logout');
// });