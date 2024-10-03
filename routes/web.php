<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/api/events', [EventController::class, "index"]);

Route::get('/api/events/{id}', [EventController::class, "show"]);