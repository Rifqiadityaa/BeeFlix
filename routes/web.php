<?php

use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\MovieDetailController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [MainMenuController::class, 'index']);

Route::get('/movie/{id}/{Title}', [MovieDetailController::class, 'index']);

Route::get('/movies/genre/{id}/', [CategoryController::class, 'index']);
