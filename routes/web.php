<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeatureController;
use App\Models\Feature;
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

Route::get('/feature', [FeatureController::class, 'index'])->name('feature');

Route::prefix('admin')->group((function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.home');

        Route::get('service', function () {
            return view('admin.service');
        })->name('admin.service');

        Route::get('admin.create', function () {
            return view('admin.create');
        })->name('admin.create');
        Route::get('admin/{id}/edit', [FeatureController::class, 'edit'])->name('admin.edit');
        Route::post(
            'admin.create',
            [FeatureController::class, 'create']
        )->name('admin.create');
        Route::delete(
            'admin/{id}',
            [FeatureController::class, 'destroy']
        )->name('admin.destroy');
        Route::put(
            'admin/{id}',
            [FeatureController::class, 'update']
        )->name('admin.update');
        Route::get('feature', function () {
            $feature = Feature::all();
            return view('admin.feature', compact('feature'));
        })->name('admin.feature');
    })
);

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
