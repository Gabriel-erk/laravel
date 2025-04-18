<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SeriesController::class, 'index'])->name('series');
Route::get('series/criar', [SeriesController::class, 'create'])->name('series.criar');
Route::post('series/salvar',[SeriesController::class, 'store'])->name('series.store');
