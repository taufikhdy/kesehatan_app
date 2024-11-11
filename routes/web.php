<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

//RUTE UKS

use App\Http\Controllers\UKSController;


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

Route::get('ukssiswa', [UKSController::class, 'index'])->name('ukssiswa');
Route::get('tmbhsiswa', [UKSController::class, 'tambah'])->name('tmbhsiswa');
Route::get('/get-teacher/{nama_kelas}', [UKSController::class, 'getWaliKelas']);

Route::post('tambah', [UKSController::class, 'kirim'])->name('tambah');
Route::post('hapus/{id}', [UKSController::class, 'hapus'])->name('hapus');

