<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.homepage');
})->name('public.homepage');

Route::get('/about', function () {
    return view('public.aboutpage');
})->name('public.aboutpage');

Route::get('/contact', function () {
    return view('public.contactpage');
})->name('public.contactpage');

Route::get('/volunteer', function () {
    return view('public.volunteerpage');
})->name('public.volunteerpage');


Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'index'])->name('public.animals.index');

