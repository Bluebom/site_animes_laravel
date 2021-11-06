<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Anime
Route::post('animes/', 'AnimeController@store')->name('animes');
Route::put('animes/{id}', 'AnimeController@update')->name('animes.update');
Route::delete('animes/{id}', 'AnimeController@destroy')->name('animes.delete');


// Video
Route::post('videos/', 'VideoController@store')->name('videos');
Route::put('videos/{id}', 'VideoController@update')->name('videos.update');
Route::delete('videos/{id}', 'VideoController@destroy')->name('videos.delete');
