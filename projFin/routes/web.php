<?php


use App\Http\Controllers\AgentController;
use App\Http\Controllers\SupportController;
use App\Models\Agent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout');
});
  
Route::get("/agent",[AgentController::class,"index"]);

//route 
Route::post("/Ajouter agent",[AgentController::class,"create"])->name("rq.create");


Route::post("/modifier agent",[AgentController::class,"update"])->name("rq.update");

Route::get("/agent/{id}",[AgentController::class,"delete"])->name("rq.delete");

Route::get('/search',[AgentController::class,'search'])->name('search');

//support
Route::get("/support",[SupportController::class,"index"]);

//route 
Route::post("/Ajouter support",[SupportController::class,"create"])->name("sp.create");


Route::post("/modifier support",[SupportController::class,"update"])->name("sp.update");

Route::get("/support/{id}",[SupportController::class,"delete"])->name("sp.delete");

Route::get('/search',[SupportController::class,'search'])->name('search');

