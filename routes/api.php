<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'test';
});

Route::get('/todo', function () {
});
Route::get('/todo/{id}', function () {
});
Route::post('/todo', function () {
});
Route::put('/todo/{id}', function () {
});
Route::delete('/todo/{id}', function () {
});
