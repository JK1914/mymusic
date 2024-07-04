<?php

use App\Http\Controllers\MyMusicController;
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

Route::post('music', [MyMusicController::class, 'store'])->name('store');
Route::get('/', function(){return view('music.main');})->name('musics');
Route::get('music/create', [MyMusicController::class, 'create'])->name('create');
Route::get('music/update', [MyMusicController::class, 'updatelist']);
Route::get('music/delete', [MyMusicController::class, 'deletelist']);
Route::get('music', [MyMusicController::class, 'index'])->name('musiclist');
Route::get('music/{id}', [MyMusicController::class, 'show'])->name('show');
Route::patch('music/{id}', [MyMusicController::class, 'update'])->name('update');
Route::delete('music/{id}', [MyMusicController::class, 'delete'])->name('delete');