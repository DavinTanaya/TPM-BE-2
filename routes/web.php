<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/add-music', [MusicController::class, 'redirectToAddMusicPage']);

Route::post('/post-add-music', [MusicController::class, 'addMusic']);

Route::get('/update-music-page/{id}', [MusicController::class, 'updateMusicPage']);

Route::post('/update-music/{id1}', [MusicController::class, 'updateMusic']);

Route::get('/delete-music/{id}', [MusicController::class, 'deleteMusic']);

Route::get('/add-artist', [ArtistController::class, 'redirectToAddArtistPage']);

Route::post('/post-add-artist', [ArtistController::class, 'addArtist']);