<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('lesson/3', [FirstController::class, 'lesson']);


Route::get('users', [FirstController::class, 'list']);
Route::post('user/{id}', [FirstController::class, 'item']);
Route::put('user/{id}', [FirstController::class, 'item']);
Route::delete('user/{id}', [FirstController::class, 'item']);
Route::get('user/create', [FirstController::class, 'create']);