<?php

use App\Http\Controllers\Controller;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [Controller::class, 'index']);
Route::get('/register', [Controller::class, 'register']);
Route::get('/listen', [Controller::class, 'listen']);
Route::post('/storeData', [Controller::class, 'storeData']);
Route::get('/sendSearch', [Controller::class, 'searchKind']);




