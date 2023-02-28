<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//log-viewers
Route::get('/log-viewers', [Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
