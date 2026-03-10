<?php

use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TeamsController::class, 'index'])->name('teams.index');

