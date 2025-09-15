<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\EventController;

Route::resource('organizations', OrganizationController::class);
Route::resource('events', EventController::class);
