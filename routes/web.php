<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StocksController;
use \App\Http\Controllers\PurchasesController;
use \App\Http\Controllers\ReportsController;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/logout', [UsersController::class, 'logout'])->name('users.logout');

Route::middleware(['auth:sanctum'])->group(function() {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('users', UsersController::class);
   

    Route::resource('stocks', StocksController::class);
    Route::resource('purchases', PurchasesController::class);
    Route::resource('reports', ReportsController::class);
    Route::get('/api/stocks', [StocksController::class, 'getStocksJson']);
    

    //Route::post('/purchases/create', [PurchasesController::class, 'store']);
    
});