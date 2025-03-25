<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/docs', function () {
    return view('swagger');
});

Route::get('/api/docs/api.yml', function () {
    return response()->file(resource_path('swagger/api.yml'));
});
