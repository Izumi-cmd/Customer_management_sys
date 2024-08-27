<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;



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

// Route::get('/', [AuthController::class, 'index'])->name('index');

/**
 * Auth認証必要
 */
Route::middleware('auth')->group(function () {
  Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
  });
});

Route::post('/logout', function () {
  Auth::logout();
  return redirect()->route('index');
})->name('logout');
