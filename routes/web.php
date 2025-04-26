<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', [AboutController::class, 'about']);
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/term', function () {
    return view('term');
})->name('term');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/feed', function () {
    return view('feed');
})->name('feed');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
