<?php

use App\Http\Controllers\ApartmentsController;
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

Route::get('/', [ApartmentsController::class, 'getList']);
Route::get('/form', [ApartmentsController::class, 'getForm']);
Route::get('/table', [ApartmentsController::class, 'getTable']);

Route::post('/form', [ApartmentsController::class, 'processForm']);
Route::post('/edit', [ApartmentsController::class, 'processEdit']);

