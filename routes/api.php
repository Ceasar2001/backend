<?php

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
Route::delete('/picturess/{id}', [PicturesItemController::class,'destroy']);