<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PicturesItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/picturess', [PicturesItemController::class, 'index']);
Route::get('/picturess/{id}', [PicturesItemController::class,'show']);
Route::post('/picturess', [PicturesItemController::class,'store']);
Route::put('/picturess/{id}', [PicturesItemController::class,'update']);
Route::delete('/picturess/{id}', [PicturesItemController::class,'destroy']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::post('/user', [UserController::class, 'store']);