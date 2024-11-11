<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

//RUTE UKS

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Siswi\Controller;
use App\Http\Controllers\SiswiController;

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
    Route::post('/login',[SesiController::class, 'login'])->name('real.login');

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
Route::get('homelanding',[SesiController::class, 'landing'])->name('landing');


//UKS SISWA
Route::get('ukssiswa', [SiswaController::class, 'index'])->name('ukssiswa');
Route::get('tmbhsiswa', [SiswaController::class, 'tambah'])->name('tmbhsiswa');
Route::get('/get-teacher/{nama_kelas}', [SiswaController::class, 'getWaliKelas']);

Route::post('kirimsiswa', [SiswaController::class, 'kirim'])->name('kirimsiswa');
Route::post('hapus/{id}', [SiswaController::class, 'hapus'])->name('hapus');


// UKS SISWI
Route::get('ukssiswi', [SiswiController::class, 'index'])->name('ukssiswi');
Route::get('tmbhsiswi', [SiswiController::class, 'tambah'])->name('tmbhsiswi');
Route::get('/get-teacher/{nama_kelas}', [SiswiController::class, 'getWaliKelas']);

Route::post('kirimsiswi', [SiswiController::class, 'kirim'])->name('kirimsiswi');
Route::post('hapus/{id}', [SiswiController::class, 'hapus'])->name('hapus');
