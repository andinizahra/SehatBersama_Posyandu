<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
        Route::get('/dashboard_admin/user', 'UserController@index')->name('user.index');

        /* User */
         Route::controller(UserController::class)->group(function () {
            Route::get('/user', [DashboardController::class, 'index']);
            Route::post('/user/tambah', 'store');
            Route::post('/user/{id}/edit', 'update')->where('id', '[0-9+]');
            Route::delete('/user/{id}/delete', 'delete')->where('id', '[0-9]+');
            });
        });
        

    }); 
        
            
            