<?php

use App\Http\Controllers\API\ArtikelApiController;
use App\Http\Controllers\API\AssessmentApiController;
use App\Http\Controllers\API\KonsultasiApiKonselor;
use App\Http\Controllers\API\KonsultasiMahasiswaController;
use App\Http\Controllers\API\LaporBioetikApiController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KritikSaranController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route API V1
Route::prefix('/v1')->group(function () {
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);

    // Untuk user yang sudah login
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/logout', [UserController::class, 'logout']);

        // User
        Route::get('/user', [UserController::class, 'profile']);
        Route::get('/konselor', [UserController::class, 'konselor']);
        Route::post('/changephoto', [UserController::class, 'gantiPhotoProfile']);


        // Lapor Bioetik
        Route::post('/laporbioetik/mahasiswa', [LaporBioetikApiController::class, 'mahasiswa']);
        Route::post('/laporbioetik/konselor', [LaporBioetikApiController::class, 'konselor']);
        Route::post('/keritik', [LaporBioetikApiController::class, 'keritiksaran']);

        // Artikel
        Route::get('/artikel', [ArtikelApiController::class, 'all']);

        // Konsultasi Mahasiswa
        Route::get('/mahasiswa/konsultasi', [KonsultasiMahasiswaController::class, 'all']);
        Route::post('/mahasiswa/konsultasi', [KonsultasiMahasiswaController::class, 'store']);

        // Konsultasi Konselor
        Route::get('/konselor/konsultasi', [KonsultasiApiKonselor::class, 'all']);
        Route::post('/konselor/konsultasi', [KonsultasiApiKonselor::class, 'konfirmasi']);

        // Assessment
        Route::get('/assessment', [AssessmentApiController::class, 'all']);
        Route::post('/assessment', [AssessmentApiController::class, 'store']);
    });
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
