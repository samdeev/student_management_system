<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('students', StudentController::class)->except(['show']);
