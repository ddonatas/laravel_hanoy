<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('c', [ContactController::class, 'index'])->name('contacts.index');
Route::get('c/contacts/create', [ContactController::class, 'create'])->middleware('auth')->name('contacts.create');
Route::post('c/contacts', [ContactController::class, 'store'])->middleware('auth')->name('contacts.store');
