<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test2', function () {
	return 'Why do you work!!!';
});

Route::get('/test', [TestController::class, 'test']);


Route::get('/users', [ClientsController::class, 'index'])->name('users');

Route::get('/check', [ClientsController::class, 'checkDatabaseConnection']);


//Route::get('/users/json', [ClientController::class, 'showJSON']);

