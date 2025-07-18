<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/business', function () {
        return Inertia::render('Business/BusinessApp');
    })->name('business');

    Route::get('/store', function () {
        return Inertia::render('Store/StoreApp');
    })->name('store');

    Route::get('/inventory', function () {
        return Inertia::render('Inventory/InventoryApp');
    })->name('inventory');

    Route::get('/products', function () {
        return Inertia::render('Products/ProductsApp');
    })->name('products');

    Route::get('/profile', function () {
        return Inertia::render('Profile/Profile');
    })->name('profile');
});