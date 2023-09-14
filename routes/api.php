<?php

use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Create Person Resource including Optional Parameters
Route::post('/{name?}', [PersonController::class, 'store'])->whereAlpha('name');

// Retrieve Person Resource with Person ID
Route::get('persons/{person_id}', [PersonController::class, 'show']);

// Edit Person Resource with Person ID
Route::put('persons/{person_id}', [PersonController::class, 'edit']);

// Delete Person Resource with Person ID
Route::delete('persons/{person_id}', [PersonController::class, 'delete']);


