<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'showHome'])->name('home'); // Ruta para la página de inicio

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


Route::get('/admin/clients', [AdminController::class, 'showClients'])->name('clients.list');
Route::get('/admin/export-clients', [AdminController::class, 'exportClients'])->name('clients.export');
Route::post('/admin/select-winner', [AdminController::class, 'selectWinner'])->name('select.winner');
