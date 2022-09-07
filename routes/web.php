<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasControlador;

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

Route::get('/', [PaginasControlador::class, 'welcome']);

Route::get('/landingpage', [PaginasControlador::class, 'landingpage']);

Route::get('/contacto/{test?}', [PaginasControlador::class, 'contacto']);