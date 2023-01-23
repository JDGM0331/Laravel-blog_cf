<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; /* Use a specific controller */

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

Route::get('/', HomeController::class); /* Default route */

Route::get('cursos', [CursoController::class, 'index']); /* Route with response text */

Route::get('cursos/create', [CursoController::class, 'Create']); /* Route with specific name */

Route::get('cursos/{curso}', [CursoController::class, 'show']); /* Route with a single parameter */
