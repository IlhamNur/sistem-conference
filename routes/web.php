<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'title' => 'International Conference of Global Confucius Institute'
    ]);
});

Route::get('/about-committee', function () {
    return view('about.committee', [
        'title' => 'Committee - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/about-scopes', function () {
    return view('about.scopes', [
        'title' => 'Scopes - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/download-pamphlet', function () {
    return view('download.pamphlet', [
        'title' => 'Pamphlet - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/download-payment-guideline', function () {
    return view('download.payguide', [
        'title' => 'Payment Guide - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/download-template', function () {
    return view('download.template', [
        'title' => 'Template - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/registration-payment-method', function () {
    return view('registration.payment', [
        'title' => 'Payment Method - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/registration-registration-submission', function () {
    return view('registration.registration', [
        'title' => 'Registration - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/venue-contact', function () {
    return view('contact', [
        'title' => 'Venue & Contact - International Conference of Global Confucius Institute'
    ]);
});

Route::get('/account', function () {
    return view('account', [
        'title' => 'Account - International Conference of Global Confucius Institute'
    ]);
});
