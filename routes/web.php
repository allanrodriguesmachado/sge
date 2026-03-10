<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [StaffController::class, 'index'])->name('staff.index');

Route::resource('staff', StaffController::class);

