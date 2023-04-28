<?php


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

Route::get('/', function () {
    return view('layout');
});


Route::get('/search2', [PlanningController::class, 'search2']);

Route::resource('/plannings', PlanningController::class);

Route::get('/search1', [DepartementController::class, 'search1']);
Route::resource('/departements', DepartementController::class);




