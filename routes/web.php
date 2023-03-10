<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; /* Use a specific controller */

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home'); /* Default route */

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros'); /* Route for static views */

Route::get('contactanos', function(){

    $correo = new ContactanosMailable;
    Mail::to('pruebasjdgm123@gmail.com')->send($correo);

    return "Mensaje enviado"; 

});
