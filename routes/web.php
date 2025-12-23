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

Route::livewire('/admin/dashboard', 'pages::dashboard')->name('dashboard')->middleware('auth');

Route::livewire('/admin/animals', 'pages::animals.index')->name('animals.index')->middleware('auth');
Route::livewire('/admin/animals/create', 'pages::animals.create')->name('animals.create')->middleware('auth');
Route::livewire('/admin/animals/{id}', 'pages::animals.show')->name('animals.show')->middleware('auth');
Route::livewire('/admin/animals/{id}/edit', 'pages::animals.edit')->name('animals.edit')->middleware('auth');

Route::livewire('/admin/adoptings', 'pages::adoptings.index')->name('adoptings.index')->middleware('auth');
Route::livewire('/admin/adoptings/create', 'pages::adoptings.create')->name('adoptings.create')->middleware('auth');
Route::livewire('/admin/adoptings/{id}/edit', 'pages::adoptings.edit')->name('adoptings.edit')->middleware('auth');
Route::livewire('/admin/adoptings/{id}', 'pages::adoptings.show')->name('adoptings.show')->middleware('auth');

Route::livewire('/admin/volunteers', 'pages::volunteers.index')->name('volunteers.index')->middleware('auth');
Route::livewire('/admin/volunteers/create', 'pages::volunteers.create')->name('volunteers.create')->middleware('auth');
Route::livewire('/admin/volunteers/{id}/edit', 'pages::volunteers.edit')->name('volunteers.edit')->middleware('auth');
Route::livewire('/admin/volunteers/{id}', 'pages::volunteers.show')->name('volunteers.show')->middleware('auth');

Route::livewire('/admin/messages', 'pages::messages.index')->name('messages.index')->middleware('auth');
Route::livewire('/admin/settings', 'pages::settings')->name('settings')->middleware('auth');

Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'index'])->name('public.animals.index');
Route::get('/animals/{animal}', [\App\Http\Controllers\AnimalController::class, 'show'])->name('public.animals.show');

