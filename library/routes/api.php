<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//User végpontok
Route::get('/users',[UserController::class, 'index']);
//getes kérések bongeszoben is tesztelhetoek
// szerverlink/api/users

Route::get('/users/{id}',[UserController::class, 'show']);

Route::post('/users',[UserController::class, 'store']);

Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}',[UserController::class, 'destroy']);

//books

Route::get('/books',[BookController::class, 'index']);


Route::get('/books/{id}',[BookController::class, 'show']);

Route::post('/books',[BookController::class, 'store']);

Route::put('/books/{id}',[BookController::class, 'update']);
Route::delete('/books/{id}',[BookController::class, 'destroy']);

//copies

Route::get('/copies',[CopyController::class, 'index']);


Route::get('/copies/{id}',[CopyController::class, 'show']);

Route::post('/copies',[CopyController::class, 'store']);

Route::put('/copies/{id}',[CopyController::class, 'update']);
Route::delete('/copies/{id}',[CopyController::class, 'destroy']);


