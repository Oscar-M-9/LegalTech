<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurisprudenciaController;
use App\Http\Controllers\PromptsController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('courses', [HomeController::class, 'viewCourses'])->name('courses');
Route::get('/jurisprudencia', [JurisprudenciaController::class, 'index'])->name('jurisprudencia');

Route::get('legalbot/index', [PromptsController::class, 'viewIndex'])->name('legalBot.index');
Route::get('legalbot/conocimiento', [PromptsController::class, 'viewConocimiento'])->name('legalBot.conocimiento');
Route::get('legalbot/escrito_final', [PromptsController::class, 'viewEscritoFinal'])->name('legalBot.escrito_final');
Route::get('legalbot/asistencia-legal-ia', [PromptsController::class, 'show'])->name('prompts');
