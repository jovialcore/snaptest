<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\API\CitizensController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register', [App\Http\Controllers\API\AuthenticateController::class, 'register']);
Route::post('/login', [App\Http\Controllers\API\AuthenticateController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('citizens', CitizensController::class);
});
