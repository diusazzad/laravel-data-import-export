<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', [ImportController::class, 'importForm'])->name('import.form');
Route::get('/upload', [ImportController::class, 'upload'])->name('upload');
