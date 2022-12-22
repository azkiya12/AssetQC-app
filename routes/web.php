<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManufakturController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AssetController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard'); })->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('manufakturs', ManufakturController::class);
    Route::resource('location', LocationController::class);
    Route::resource('status', StatusController::class);
    Route::resource('asset', AssetController::class);
});

require __DIR__.'/auth.php';