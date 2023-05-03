<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\PlanningController;
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
    return view('layout');
});





//departement
Route::get("/departement",[DepartementController::class,"index"]);

Route::post("/Ajouter departement",[DepartementController::class,"create"])->name("dp.create");

Route::post("/modifier departement",[DepartementController::class,"update"])->name("dp.update");

Route::get("/departement/{id}",[DepartementController::class,"delete"])->name("dp.delete");

Route::get('/searchdep',[DepartementController::class,'search'])->name('searchdep');



//planning
Route::get("/planning",[PlanningController::class,"index"]);

Route::post("/Ajouter planning",[PlanningController::class,"create"])->name("pl.create");

Route::post("/modifier planning",[PlanningController::class,"update"])->name("pl.update");

Route::get("/planning/{id}",[PlanningController::class,"delete"])->name("pl.delete");

Route::get('/searchpla',[PlanningController::class,'search'])->name('searchpla');


