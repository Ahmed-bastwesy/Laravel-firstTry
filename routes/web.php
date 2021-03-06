<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PostController;
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
Route::get('/posts', action: [PostController::class, 'index']);
Route::get('/posts/create', action: [PostController::class, 'create']);
Route::get('/posts/{post}', action: [PostController::class, 'show']);
Route::get('/posts/edit/{data}', action: [PostController::class, 'update']);
