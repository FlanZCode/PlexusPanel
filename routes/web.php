<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NodeController;


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
    return view('dashboard');
    HTML::style('css/styles.css');
})->middleware(['auth', 'verified'])->name('dashboard');

//settings
Route::get('/settings', function () {
    return view('settings');
})->middleware(['auth', 'verified'])->name('settings');

Route::get('/settings/settings', function () {
    return view('settings');
})->middleware(['auth', 'verified'])->name('settsettings');

Route::get('/settings/api', function () {
    return view('settings');
})->middleware(['auth', 'verified'])->name('settapi');

Route::get('/settings/node', [NodeController::class, 'showNodes'])
    ->middleware(['auth', 'verified'])
    ->name('settnode');

Route::get('/settings/node/create-node', [NodeController::class, 'create'])->name('create-node');

Route::post('/settings/node/create-node/store-node', [NodeController::class, 'store'])->name('store-node');

Route::get('/settings/location', function () {
    return view('settings');
})->middleware(['auth', 'verified'])->name('settlocation');

Route::get('/settings/database', function () {
    return view('settings');
})->middleware(['auth', 'verified'])->name('settdatabase');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
