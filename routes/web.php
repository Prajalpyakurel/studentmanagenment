<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseBookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CashFlowController;
use App\Http\Controllers\frontend\FrontendHomeController;
use App\Http\Controllers\EsewaPaymentController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
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

    // Routes for CashFlow management
    Route::get('/cashflows', [CashFlowController::class, 'index'])->name('cashflows.index');
    Route::get('/cashflows/create', [CashFlowController::class, 'create'])->name('cashflows.create');
    Route::post('/cashflows', [CashFlowController::class, 'store'])->name('cashflows.store');
    Route::get('/cashflows/{id}/edit', [CashFlowController::class, 'edit'])->name('cashflows.edit');
    Route::put('/cashflows/{id}', [CashFlowController::class, 'update'])->name('cashflows.update');
    Route::delete('/cashflows/{id}', [CashFlowController::class, 'destroy'])->name('cashflows.destroy');


    Route::get('/bookings', [CourseBookingController::class, 'index'])->name('bookings.index');
    Route::patch('/bookings/{booking}/status', [CourseBookingController::class, 'updateStatus'])->name('bookings.status');
    Route::get('/bookings/{booking}/edit', [CourseBookingController::class, 'edit'])->name('bookings.edit');
    Route::put('/bookings/{booking}', [CourseBookingController::class, 'update'])->name('bookings.update');
    Route::delete('/bookings/{booking}', [CourseBookingController::class, 'destroy'])->name('bookings.destroy');
});




Route::get('/', [FrontendHomeController::class, 'index'])->name('home');
Route::get('/courses', [FrontendHomeController::class, 'courses'])->name('courses');
Route::get('/detail/{id}', [FrontendHomeController::class, 'detail'])->name('course.detail');
Route::post('/courses/{course}/book', [FrontendHomeController::class, 'CourseBooking'])->name('courses.book');
Route::get('/search', [FrontendHomeController::class, 'search'])->name('search');



// ─── eSewa Payment Routes ───────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::post('/courses/{course}/esewa/initiate', [EsewaPaymentController::class, 'initiate'])->name('esewa.initiate');
    Route::get('/booking/{booking}/confirmation', [EsewaPaymentController::class, 'confirmation'])->name('booking.confirmation');
});

// eSewa redirects back to these — NO auth middleware (eSewa calls these as redirects)
Route::get('/esewa/success', [EsewaPaymentController::class, 'success'])->name('esewa.success');
Route::get('/esewa/failure', [EsewaPaymentController::class, 'failure'])->name('esewa.failure');
// Route::get('/course/{slug}', [FrontendHomeController::class, 'courseDetail'])->name('course.detail');




// Route::get('/courses', function () {
//     return view('website.pages.coursedetail');
// });
