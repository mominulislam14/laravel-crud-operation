<?php

use App\Http\Controllers\FormController;
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
*/

Route::get('/',[FormController::class,'Home']);
Route::get('form',[FormController::class,'Form']);
Route::post('store',[FormController::class,'store']) -> name('user.store');

Route::get('list',[FormController::class,'List']);