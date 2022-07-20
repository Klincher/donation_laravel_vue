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

Route::get('/{any}', [SpaController::class, "index"])->where('any', '.*');

// Route::get('/donations/create', [DonationController::class, 'create'])
//     ->name('donations');

// Route::post('/donations', [DonationController::class, 'store'])
//     ->name('donations.store');

// Route::post('/chartsdata', [DonationController::class, 'getChartsDataByDate'])
//     ->name('charts.date');

// Route::post('/searchDonator', [DonationController::class, 'searchDonator'])
//     ->name('search1');

