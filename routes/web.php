<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\AuthorController;


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


Route::get('/', [NavController::class, 'home']);
Route::get('/list', [NavController::class, 'list']);
Route::get('/character/{id}', [NavController::class, 'character']);
Route::get('/add', [NavController::class, 'add']);
Route::post('/addCharacter', [CharacterController::class, 'add']);
Route::post('/deleteCharacter', [CharacterController::class, 'delete']);
Route::get('/updateCharacter/{id}', [NavController::class, 'updateCharacter']);
Route::post('/updateCharacter', [CharacterController::class, 'update']);
