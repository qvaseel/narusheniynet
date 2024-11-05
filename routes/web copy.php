<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReportController::class, 'index'])->name('report.index');

Route::delete('/{report}', [ReportController::class, 'destroy'])->name('report.destroy');

Route::post('/', [ReportController::class, 'store'])->name('report.store');

Route::get('/{report}', [ReportController::class, 'show'])->name('report.show');

Route::put('/{report}', [ReportController::class, 'update'])->name('report.update');
