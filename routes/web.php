<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\VideoController;
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
    return view('welcome');
});


// Anime
Route::get('animes/', [AnimeController::class,'index'])->name('animes');
Route::get('animes/{id}', [AnimeController::class,'show'])->name('animes.show');
Route::get('animes/create', [AnimeController::class,'create'])->name('animes.create');
Route::get('animes/{id}/edit', [AnimeController::class,'edit'])->name('animes.edit');

// Video
Route::get('video/', 'VideoController@index')->name('videos');
Route::get('video/{id}', 'VideoController@show')->name('videos.show');
Route::get('video/create', 'VideoController@create')->name('videos.create');
Route::get('video/{id}/edit', 'VideoController@edit')->name('videos.edit');
