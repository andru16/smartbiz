<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitadosController;

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

Route::get('/invitados', [InvitadosController::class, 'vistaInvitados']);
Route::get('/lista-invitados', [InvitadosController::class, 'listaInvitados']);
