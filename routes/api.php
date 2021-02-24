<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('beers', [BeerController::class, 'index']);
Route::get('beers/{id}', [BeerController::class, 'show']);

Route::get('admin/beers', [BeerController::class, 'index']);
Route::post('admin/beers', [BeerController::class, 'store']);
Route::patch('admin/beers/{id}', [BeerController::class, 'update']);
Route::delete('admin/beers/{id}', [BeerController::class, 'destroy']);
