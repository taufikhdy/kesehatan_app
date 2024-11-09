<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['guest'])->group(function(){

    Route::get('/',[SesiController::class, 'index'])->name('login');
    Route::get('/login',[SesiController::class, 'index2'])->name('login2');
Route::post('/login',[SesiController::class, 'login']);

});
Route::get('/home',function(){
    return redirect('/admin');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/uks_siswa',[AdminController::class,'uks_siswa'])->middleware(('userAkses:uks_siswa'));
    Route::get('/admin/uks_siswi',[AdminController::class,'uks_siswi'])->middleware(('userAkses:uks_siswi'));
    Route::get('/admin/poskes',[AdminController::class,'poskes'])->middleware(('userAkses:poskes'));
    Route::get('/logout',[SesiController::class,'logout']);

});
