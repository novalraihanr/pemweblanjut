<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/customers', [CustomersController::class, 'index']);
Route::post('/customers/add', [CustomersController::class, 'store']);
Route::put('/customers/{id}', [CustomersController::class, 'update']);
Route::delete('/customers/{id}', [CustomersController::class, 'delete']);

Route::get('/items', [ItemsController::class, 'index']);
Route::post('/items/add', [ItemsController::class, 'store']);
Route::put('/items/{id}', [ItemsController::class, 'update']);
Route::delete('/items/{id}', [ItemsController::class, 'delete']);

Route::get('/transaction', [TransactionsController::class, 'index']);
Route::get('/transaction/show/{id}', [TransactionsController::class, 'show']);
Route::post('/transaction/add/{id}', [TransactionsController::class, 'store']);
Route::put('/transaction/{id}', [TransactionsController::class, 'update']);
Route::delete('/transaction/{id}', [TransactionsController::class, 'delete']);
