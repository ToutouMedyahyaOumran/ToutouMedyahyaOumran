<?php

use App\Http\Controllers\Api\agentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\plannigController;
use App\Http\Controllers\ProfileController;

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
 Route::post('/auth/login',[agentController::class,'login']);

 

Route::get('/plannings/{id}', [plannigController::class, 'getPlanningsByagent']);



Route::get('/agent-profile', [ProfileController::class, 'getAgentProfile']);

Route::get('/profile', [ProfileController::class, 'show']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


