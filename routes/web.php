<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelOperations;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LaravelOperations::class, 'createTable'])->name('home');

Route::get('/add', [LaravelOperations::class, 'addData'])->name('addData');
Route::get('/edit/{id}', [LaravelOperations::class, 'editForm'])->name('edit');
Route::post('/insert', [LaravelOperations::class, 'insertdata'])->name('inserted');
Route::get('/customer-view', [LaravelOperations::class, 'getData'])->name('Data');

Route::put('/update/{id}', [LaravelOperations::class, 'updateData'])->name('updated');
Route::get('/delete/{id}', [LaravelOperations::class, 'destroy'])->name('destroy');

Route::post('/remove-image', [LaravelOperations::class, 'removeImage'])->name('remove-image');
