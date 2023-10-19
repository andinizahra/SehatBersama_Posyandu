<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\DataAnakController;
use App\Http\Controllers\DataIbuHamilController;
use App\Http\Controllers\InformasiKesehatan;
use App\Http\Controllers\PemeriksaanAnakController;
use App\Http\Controllers\RiwayatKesehatan;
use App\Http\Controllers\UserController;
use Database\Factories\PemeriksaanAnakFactory;
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

Route::get('', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/dashboard')->middleware('auth')->group(function () {
    /* Dashboard */
    Route::get('/', [DashboardController::class, 'index']);
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/dashboard_admin/user', 'UserController@index')->name('user.index');

        /* User */
        Route::controller(UserController::class)->group(function () {
            Route::get('/user', [DashboardController::class, 'index']);
            Route::post('/user/tambah', 'store');
            Route::post('/user/{id}/edit', 'update')->where('id', '[0-9+]');
            Route::delete('/user/{id}/delete', 'delete')->where('id', '[0-9]+');
        });
    });

    Route::prefix('/dashboard')->middleware('auth')->group(function () {
        /* Dashboard */
        Route::get('/', [DashboardController::class, 'index']);
        Route::middleware(['role:kader'])->group(function () { });
    });

    /* keluarga */
    Route::prefix('/dashboard')->middleware('auth')->group(function () {
        /* Dashboard */
        Route::get('/', [DashboardController::class, 'index']);
        Route::middleware(['role:keluarga'])->group(function () { });
    });

    //Informasi Kesehatan
    Route::controller(InformasiKesehatanController::class)->group(function () {
        Route::get('/informasi_kesehatan', 'index');
        Route::post('/infromasi_kesehatan/tambah', 'store');
        Route::post('/informasi_kesehatan/{id}/edit', 'update')->where('id', '[0-9+]');
        Route::delete('/informasi_kesehatan/{id}/delete', 'delete')->where('id', '[0-9]+');
    });
});

//Pemeriksaan Anak
Route::controller(PemeriksaanAnakController::class)->group(function () {
    Route::get('/pemeriksaan_anak', 'index');
    Route::post('/pemeriksaan_anak/tambah', 'store');
    Route::post('/pemeriksaan_anak/{id}/edit', 'update')->where('id', '[0-9+]');
    Route::delete('/pemeriksaan_anak/{id}/delete', 'delete')->where('id', '[0-9]+');
});

        // }); 
        // }); 
