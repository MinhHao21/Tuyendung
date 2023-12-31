<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TuyendungController;
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
Route::get('/ung-tuyen', [TuyendungController::class, 'ungtuyen'])->name('ungtuyen');
Route::put('/ung-tuyen/{id}', [TuyendungController::class, 'update']);

// api sua

// Route::post('/ung-tuyen', [TuyendungController::class, 'ungtuyen'])->name('ungtuyen');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
