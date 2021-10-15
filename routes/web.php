<?php

use App\Http\Controllers\create_player_controller;
use App\Http\Controllers\Team;
use App\Models\Team as ModelsTeam;
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

Route::get('/', [Team::class, 'index']);
Route::get('teams/{id}', [Team::class, 'getTeam']);
Route::get('/players/{id}', [create_player_controller::class, 'getPlayer']);
