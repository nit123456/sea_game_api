<?php

use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);
Route::get('/event/{name}', [EventController::class, 'search']);
Route::get('/detailEvent/{id}', [EventController::class, 'detailEvent']);
Route::post('/newEvent', [EventController::class, 'store']);
