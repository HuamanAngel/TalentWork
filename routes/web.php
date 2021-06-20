<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EraserController;
use App\Http\Controllers\ContractController;
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

Route::get('/',[EraserController::class,'index']);



Route::get('/perfil',[ContractController::class,'index']);
Route::middleware(['auth'])->group(function () {
    Route::post('/proccessContract',[ContractController::class,'contractProcess'])->name('iPContract');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('nuevo',function(){
    return view('nuevo');
});
Route::get('template',function(){
    return view('template');
});