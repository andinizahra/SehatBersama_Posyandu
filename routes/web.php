<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
<<<<<<< HEAD
use App\Http\Controllers\KeluargaController;
=======
use App\Http\Controllers\DataAnakController;
use App\Http\Controllers\DataIbuHamilController;
>>>>>>> ba0914484b8bc33a56eeb0ba8664e26d9707c7f9
use App\Http\Controllers\UserController;
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
Route::get('', function() {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/dashboard')->middleware('auth')->group(function () {
    /* Dashboard */
    Route::get('/', [DashboardController::class, 'index']);
    Route::middleware(['role:admin'])->group(function (){
        /* User */
         Route::controller(UserController::class)->group(function () {
            Route::get('/user', 'index');
            Route::post('/user/tambah', 'store');
            Route::post('/user/{id}/edit', 'update')->where('id', '[0-9+]');
            Route::delete('/user/{id}/delete', 'delete')->where('id', '[0-9]+');
            });
        });

<<<<<<< HEAD
//         Route::prefix('/dashboard_keluarga')->middleware('keluarga')->group(function () {
//             Route::get('/', [DashboardController::class, 'index']);
//             Route::middleware(['role:keluarga'])->group(function () {
                /* Keluarga */
                Route::controller(KeluargaController::class)->group(function () {
                    Route::get('keluarga', 'index');
                    Route::post('/keluarga/tambah', 'store');
                    Route::post('/keluarga/{id}/edit', 'update')->where('id', '[0-9+]');
                    Route::delete('/keluarga/{id}/delete', 'delete')->where('id', '[0-9]+');
                });

            });
        // });
=======
        Route::prefix('/dashboard')->middleware('auth')->group(function () {
            /* Dashboard */
            Route::get('/', [DashboardController::class, 'index']);
            Route::middleware(['role:kader'])->group(function (){
            /* Data_Anak*/
            Route::controller(DataAnakController::class)->group(function () {
                Route::get('/data_anak', 'index');
                Route::post('/data_anak/tambah', 'store');
                Route::post('/data_anak/{id}/edit', 'update')->where('id', '[0-9+]');
                Route::delete('/data_anak/{id}/delete', 'delete')->where('id', '[0-9]+');
            /* Data_Ibu_Hamil*/
            Route::controller(DataIbuHamilController::class)->group(function () {
                Route::get('/data_ibu_hamil', 'index');
                Route::post('/data_ibu_hamil/tambah', 'store');
                Route::post('/data_ibu_hamil/{id}/edit', 'update')->where('id', '[0-9+]');
                Route::delete('/data_ibu_hamil/{id}/delete', 'delete')->where('id', '[0-9]+');
                });
            });
                });
            });
       

        Route::prefix('/dashboard')->middleware('auth')->group(function () {
            Route::get('/', [DashboardController::class, 'index']);
            Route::middleware(['role:keluarga'])->group(function () {
                /* User */
                Route::controller(UserController::class)->group(function () {
                    Route::get('/user', 'index');
                    Route::post('/user/tambah', 'store');
                    Route::post('/user/{id}/edit', 'update')->where('id', '[0-9+]');
                    Route::delete('/user/{id}/delete', 'delete')->where('id', '[0-9]+');
                });

            });
        });
    });
>>>>>>> ba0914484b8bc33a56eeb0ba8664e26d9707c7f9
