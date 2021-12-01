<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\BioetikController;
use App\Http\Controllers\HistoryAssesmentController;
use App\Http\Controllers\KonselorController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RekamMedikController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Authenticate;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;

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

Route::get('/', [
    AuthController::class, 'index'
])->name('login')->middleware('guest');

Route::post('/authenticate', [
    AuthController::class, 'authenticate'
]);

Route::post('/logout', [
    AuthController::class, 'logout'
]);


// Middelware
Route::group(['middleware' => ['auth', 'cekrole:admin']], function () {
    Route::resource('/admin/dashboard', AdminController::class);

    Route::resource('/admin/assesment', AssesmentController::class);

    Route::resource('/admin/konselor', KonselorController::class);

    Route::resource('/admin/mahasiswa', MahasiswaController::class);

    Route::resource('/admin/bioetik', BioetikController::class);

    Route::resource('/admin/rekam_medik', RekamMedikController::class);

    Route::resource('/admin/kritik_saran', KritikSaranController::class);

    Route::resource('/admin/konsultasi', KonsultasiController::class);

    Route::resource('/admin/artikel', ArtikelController::class);
});
