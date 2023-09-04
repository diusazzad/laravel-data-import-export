<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', [ImportController::class, 'importForm'])->name('import');
Route::post('/import', [ImportController::class, 'import']);
Route::get('/export', [ExportController::class, 'export']);
