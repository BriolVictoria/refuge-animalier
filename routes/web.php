<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index'])->name('public.homepage');

Route::get('/about', function () {
    return view('public.aboutpage');
})->name('public.aboutpage');

Route::get('/contact', function () {
    return view('public.contactpage');
})->name('public.contactpage');

Route::get('/volunteer', function () {
    return view('public.volunteerpage');
})->name('public.volunteerpage');

Route::livewire('/admin/dashboard', 'pages::dashboard')->name('dashboard');

Route::livewire('/admin/animals', 'pages::animals.index')->name('animals.index');
Route::livewire('/admin/animals/create', 'pages::animals.create')->name('animals.create');
Route::livewire('/admin/animals/{id}', 'pages::animals.show')->name('animals.show');
Route::livewire('/admin/animals/{id}/edit', 'pages::animals.edit')->name('animals.edit');

Route::livewire('/admin/adoptings', 'pages::adoptings.index')->name('adoptings.index');

Route::livewire('/admin/volunteers', 'pages::volunteers.index')->name('volunteers.index');
Route::livewire('/admin/volunteers/create', 'pages::volunteers.create')->name('volunteers.create');
Route::livewire('/admin/volunteers/{id}/edit', 'pages::volunteers.edit')->name('volunteers.edit');
Route::livewire('/admin/volunteers/{id}', 'pages::volunteers.show')->name('volunteers.show');

Route::livewire('/admin/messages', 'pages::messages.index')->name('messages.index');
Route::livewire('/admin/settings', 'pages::settings')->name('settings');

Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'index'])->name('public.animals.index');
Route::get('/animals/{animal}', [\App\Http\Controllers\AnimalController::class, 'show'])->name('public.animals.show');

