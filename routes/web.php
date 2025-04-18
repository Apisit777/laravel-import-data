<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(UserController::class)->group(function () {
    Route::get('users', [UserController::class, 'index']);
    Route::post('users-export', [UserController::class, 'export'])->name('users.export');
    Route::post('users-import', [UserController::class, 'import'])->name('users.import');
// })
