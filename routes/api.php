<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/example', [ExampleController::class, 'show']);
