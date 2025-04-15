<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('series', [SeriesController::class, 'index'])->name('series');
Route::get('series/criar', [SeriesController::class, 'create'])->name('series.criar');
Route::post('series/salvar',[SeriesController::class, 'store'])->name('series.salvar');
