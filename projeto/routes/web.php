<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventControllers;

Route::get('/', [EventControllers::class, 'index']);
Route::get('/events/create', [EventControllers::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventControllers::class, 'show']);
Route::post('/events', [EventControllers::class, 'store']);
Route::delete('/events/{id}', [EventControllers::class, 'destroy'])->middleware('auth');
Route::post('/events/edit/{id}', [EventControllers::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventControllers::class, 'update'])->middleware('auth');


Route::get('/dashoard', [EventControllers::class, 'dashboard'])->middleware('auth');

