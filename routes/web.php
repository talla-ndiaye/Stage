<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\QuizController;

Route::get('/paysage', [QuizController::class, 'index']);
Route::get('/sport', [QuizController::class, 'index1']);
Route::get('/histoire', [QuizController::class, 'index2']);
Route::get('/education', [QuizController::class, 'index3']);
Route::get('/personnage', [QuizController::class, 'index4']);
Route::get('/culture', [QuizController::class, 'index5']);

