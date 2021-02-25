<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBController;
use App\Http\Controllers\UserController;
use App\Models\Beers;

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

Route::get('/', [UserController::class,'loginCheck']);

Route::view('/malatak', 'malatak');
Route::view('/komlok', 'komlok');
Route::view('/elesztok', 'elesztok');
Route::view('/tipusok', 'tipusok');

Route::get('logout', [UserController::class,'logOut']);

Route::redirect('/home', '/');

Route::post('/', [DBController::class,'addData']);
Route::post('/eddigi-sorok', [DBController::class,'updateData']);


Route::get('/eddigi-sorok', [DBController::class,'getDatas'])->middleware('auth');

Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    require __DIR__.'/auth.php';