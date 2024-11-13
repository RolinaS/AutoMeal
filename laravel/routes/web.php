<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meal', function () {
    return view('meal.index');
})->name('meal.index');

Route::get('/training', function () {
    return view('training.index');
})->name('training.index');

Route::get('/appraisal', function () {
    return view('appraisal.index');
})->name('appraisal.index');
