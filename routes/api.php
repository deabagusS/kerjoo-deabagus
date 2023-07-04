<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnualLeaveController;

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
Route::group([
    // 'middleware' => 'auth:api',
    'prefix' => 'annual-leaves'
], function ($router) {
    Route::get('/', [AnnualLeaveController::class, 'list'])->name('annual-leave-list');
    Route::post('/', [AnnualLeaveController::class, 'create'])->name('annual-leave-create');
    Route::get('/{id}', [AnnualLeaveController::class, 'find'])->name('annual-leave-find');
});