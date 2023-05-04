<?php


use App\Http\Controllers\AgentController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\DachebordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\InterventionController;
use App\Models\Agent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartementController;

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

// Route::get('/', function () {
//     return view('layout');
// });

Route::get("/dachebord",[DachebordController::class,"index"]);

  
Route::get("/agent",[AgentController::class,"index"]);

//route 
Route::post("/Ajouter agent",[AgentController::class,"create"])->name("rq.create");


Route::post("/modifier agent",[AgentController::class,"update"])->name("rq.update");

Route::get("/agent/{id}",[AgentController::class,"delete"])->name("rq.delete");

Route::get('/search',[AgentController::class,'search'])->name('search');
Route::get("/print_adent",[AgentController::class,"print_agent"])->name("print_agent");


//support
Route::get("/support",[SupportController::class,"index"]);

//route 
Route::post("/Ajouter support",[SupportController::class,"create"])->name("sp.create");


Route::post("/modifier support",[SupportController::class,"update"])->name("sp.update");

Route::get("/support/{id}",[SupportController::class,"delete"])->name("sp.delete");

Route::get('/searchsu',[SupportController::class,'search'])->name('searchsu');
//login

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/loginAdmim',[LoginController::class,'loginAdmim'])->name('loginAdmim');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registeradm',[LoginController::class,'registeradm'])->name('registeradm');

//vei
Route::get("/vehicules", [VehiculeController::class, "index"])->name("vehicules");
Route::post("/Ajouter vehicules", [VehiculeController::class, "create"])->name("vehicules.create");

Route::delete("/vehicules/{vehicules}", [VehiculeController::class, "delete"])->name("vehicules.supprimer");


Route::get('/delete-vehicule/{id}', [VehiculeController::class, 'delete_vehicule']);
Route::get('/update-vehicule/{id}', [VehiculeController::class, 'update_vehicule']);
Route::post('/update/traitement', [VehiculeController::class, 'update_vehicule_traitement']);

Route::get('archivage',[VehiculeController::class,'trashed'])->name("archivage");;
Route::get('restore-1/{id}',[VehiculeController::class,'restore']);

Route::get('/softDelete1/{id}',[VehiculeController::class,'softDelete']);
Route::get('forceDelete1/{id}',[VehiculeController::class,'forceDelete']);
Route::get('restore-all-1',[VehiculeController::class,'restoreAll']);

// search route
Route::get('search',[VehiculeController::class,'search']);



// liste des interventions
Route::get("/interventions", [InterventionController::class, "index"])->name("interventions");
Route::post("/interventions/create", [InterventionController::class, "create"])->name("interventions.create");

Route::get('/delete-intervention/{id}', [InterventionController::class, 'delete_intervention']);
Route::get('/update-intervention/{id}', [InterventionController::class, 'update_intervention']);
Route::post('/update/intervention', [InterventionController::class, 'update_intervention_traitement']);
Route::get('archivage2',[InterventionController::class,'trashed'])->name("archivage2");;
Route::get('restore/{id}',[InterventionController::class,'restore']);

Route::get('/softDelete/{id}',[InterventionController::class,'softDelete']);
Route::get('forceDelete/{id}',[InterventionController::class,'forceDelete']);
Route::get('restore-all',[InterventionController::class,'restoreAll']);





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



