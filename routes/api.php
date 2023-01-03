<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoeurController;
use App\Http\Controllers\PaiementController;

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

//joueur

Route::get('/joueurs',[JoeurController::class, 'index']);
Route::post('/joueurs/save',[JoeurController::class, 'create']);
Route::put('/joueurs/update/{id}',[JoeurController::class, 'update']);
Route::delete('/joueurs/delete/{id}',[JoeurController::class, 'destroy']);

//paiement

Route::get('/paiements',[PaiementController::class, 'index']);
Route::post('/paiements/save',[PaiementController::class, 'create']);
Route::put('/paiements/update/{id}',[PaiementController::class, 'update']);
Route::delete('/paiements/delete/{id}',[PaiementController::class, 'destroy']);