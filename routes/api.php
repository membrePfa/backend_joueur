<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoeurController;

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


Route::get('/joueurs',[JoeurController::class, 'index']);
Route::post('/joueurs/save',[JoeurController::class, 'create']);
Route::put('/joueurs/update/{id}',[JoeurController::class, 'update']);
Route::delete('/joueurs/delete/{id}',[JoeurController::class, 'destroy']);

