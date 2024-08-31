<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CashFlowController;
// use App\Http\Middleware;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//->middleware('IsAdmin')


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [AdmissionController::class, 'report'])->name('home');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

    // Admission routes
    Route::get('/admissions', [AdmissionController::class, 'index'])->name('admissions.index');
    Route::get('/admissions/create', [AdmissionController::class, 'create'])->name('admissions.create');
    Route::post('/admissions', [AdmissionController::class, 'store'])->name('admissions.store');
    Route::get('/admissions/{admission}', [AdmissionController::class, 'show'])->name('admissions.show');
    Route::get('/admissions/{admission}/edit', [AdmissionController::class, 'edit'])->name('admissions.edit');
    Route::put('/admissions/{admission}', [AdmissionController::class, 'update'])->name('admissions.update');
    Route::delete('/admissions/{admission}', [AdmissionController::class, 'destroy'])->name('admissions.destroy');
    Route::get('admissions/export', [AdmissionController::class, 'exportCSV'])->name('admissions.export');

    Route::get('/receipts', [ReceiptController::class, 'index'])->name('receipts.index');
    Route::get('/receipts/create', [ReceiptController::class, 'create'])->name('receipts.create');
    Route::post('/receipts', [ReceiptController::class, 'store'])->name('receipts.store');
    Route::get('/receipts/student-by-phone/{phone}', [ReceiptController::class, 'getStudentByPhone']);
    Route::get('/receipts/{id}/edit', [ReceiptController::class, 'edit'])->name('receipts.edit');
    Route::put('/receipts/{id}', [ReceiptController::class, 'update'])->name('receipts.update');

    // Cash Flow routes
    Route::get('/cashflows', [CashFlowController::class, 'index'])->name('cashflows.index');
    Route::get('/cashflows/create', [CashFlowController::class, 'create'])->name('cashflows.create');
    Route::post('/cashflows', [CashFlowController::class, 'store'])->name('cashflows.store');
    Route::get('/cashflows/{cashFlow}/edit', [CashFlowController::class, 'edit'])->name('cashflows.edit');
    Route::put('/cashflows/{cashFlow}', [CashFlowController::class, 'update'])->name('cashflows.update');
    Route::delete('/cashflows/{cashFlow}', [CashFlowController::class, 'destroy'])->name('cashflows.destroy');
});



