<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index'])->name('index');

Route::post('/saveItemRoute', [TodoController::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}', [TodoController::class, 'markComplete'])->name('markComplete');

Route::resource('listItems', TodoController::class);
