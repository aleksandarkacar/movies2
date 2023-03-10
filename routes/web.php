<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
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



Route::get('/', [MovieController::class, 'index' ]);
Route::get('/movies', [MovieController::class, 'index' ]);
Route::get('/movies/{id}', [MovieController::class, 'show' ]);
Route::get('/genres/{genre}', [GenreController::class, 'show']);

Route::get('/createmovie', function () {
    return view('createmovie');
});

Route::post('/createmovie', [MovieController::class, 'store' ]);
Route::post('/createcomment', [CommentController::class, 'store']);


