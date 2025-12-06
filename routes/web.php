<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/fishery-products', function () {
    return view('fishery-products');
})->name('fishery-products');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/certificate', function () {
    return view('certificate');
})->name('certificate');

Route::get('/payment-terms', function () {
    return view('payment-terms');
})->name('payment-terms');
