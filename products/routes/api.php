<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesPointsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\ProductTagsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('product', [ProductController::class,'create']);  // /api/product
Route::get('products', [ProductController::class,'list']); // /api/products
Route::get('product/{price}', [ProductController::class,'position']); // /api/product/456465
Route::put('product/{id}', [ProductController::class,'update']);// /api/product/123
Route::delete('product/{id}', [ProductController::class,'delete']);

Route::post('tag', [TagsController::class,'create']);
Route::get('tags', [TagsController::class,'list']);
Route::get('tag/{name}', [TagsController::class,'position']);
Route::put('tag/{id}', [TagsController::class,'update']);
Route::delete('tag/{id}', [TagsController::class,'delete']);

Route::post('producttag', [ProductTagsController::class,'create']);
Route::get('producttags', [ProductTagsController::class,'list']);
Route::get('producttag', [ProductTagsController::class,'position']);
Route::put('producttag', [ProductTagsController::class,'update']);
Route::delete('producttag', [ProductTagsController::class,'delete']);

Route::post('salespoint', [SalesPointsController::class,'create']);
Route::get('salespoints', [SalesPointsController::class,'list']);
Route::get('salespoint/{id}', [SalesPointsController::class,'position']);
Route::put('salespoint/{id}', [SalesPointsController::class,'update']);
Route::delete('salespoint/{id}', [SalesPointsController::class,'delete']);


