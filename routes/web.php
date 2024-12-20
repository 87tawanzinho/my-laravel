<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::post('/events', [EventController::class,'store']);
Route::get('/events/{id}', [EventController::class,'show']);
Route::get('/search-campeao', [EventController::class,'search'])->name('search.champions');
Route::get('/dashboard', [EventController::class,'dashboard'])->middleware('auth');
Route::delete('/deleteEvent/{id}', [EventController::class,'destroy'])->middleware('auth'); 
Route::post('/events/join/{id}', [EventController::class,'joinEvent'])->middleware('auth');



