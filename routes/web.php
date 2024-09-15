<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CashFlowController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\TrainingCategoryController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {
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

   // Display all clients
   Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
   Route::get('/clients/create', [App\Http\Controllers\ClientController::class, 'create'])->name('clients.create');
   Route::post('/clients', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');
   Route::get('/clients/{id}/edit', [App\Http\Controllers\ClientController::class, 'edit'])->name('clients.edit');
   Route::put('/clients/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');
   Route::delete('/clients/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('clients.destroy');

   // Display all testimonials
   Route::get('/testimonials', [App\Http\Controllers\TestimonialController::class, 'index'])->name('testimonials.index');
   Route::get('/testimonials/create', [App\Http\Controllers\TestimonialController::class, 'create'])->name('testimonials.create');
   Route::post('/testimonials', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonials.store');
   Route::get('/testimonials/{id}/edit', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('testimonials.edit');
   Route::put('/testimonials/{id}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('testimonials.update');
   Route::delete('/testimonials/{id}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonials.destroy');


    // Route to show the logo index page
    Route::get('/logo', [App\Http\Controllers\LogoController::class, 'index'])->name('logo.index');
    Route::get('/logo/edit', [App\Http\Controllers\LogoController::class, 'edit'])->name('logo.edit');
    Route::post('/logo/update', [App\Http\Controllers\LogoController::class, 'update'])->name('logo.update');


    //route for training
    Route::get('/trainings', [TrainingController::class, 'index'])->name('trainings.index');
    Route::get('/trainings/create', [TrainingController::class, 'create'])->name('trainings.create');
    Route::post('/trainings', [TrainingController::class, 'store'])->name('trainings.store');
    Route::get('/trainings/{id}/edit', [TrainingController::class, 'edit'])->name('trainings.edit');
    Route::put('/trainings/{id}', [TrainingController::class, 'update'])->name('trainings.update');
    Route::delete('/trainings/{id}', [TrainingController::class, 'destroy'])->name('trainings.destroy');


    //route for our team

    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
    Route::get('/teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::put('/teams/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');


    // route for services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');


    // Routes for TrainingCategory
    Route::get('/trainingcategories', [TrainingCategoryController::class, 'index'])->name('trainingcategories.index');
    Route::get('/trainingcategories/create', [TrainingCategoryController::class, 'create'])->name('trainingcategories.create');
    Route::post('/trainingcategories', [TrainingCategoryController::class, 'store'])->name('trainingcategories.store');
    Route::get('/trainingcategories/{id}/edit', [TrainingCategoryController::class, 'edit'])->name('trainingcategories.edit');
    Route::put('/trainingcategories/{id}', [TrainingCategoryController::class, 'update'])->name('trainingcategories.update');
    Route::delete('/trainingcategories/{id}', [TrainingCategoryController::class, 'destroy'])->name('trainingcategories.destroy');



});





// website route
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about-us', [WebsiteController::class, 'aboutus'])->name('aboutus');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/courses', [WebsiteController::class, 'courses'])->name('courses');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/clients', [WebsiteController::class, 'clients'])->name('clients');
Route::get('/blogs', [WebsiteController::class, 'blogs'])->name('blogs');
Route::get('/webdevelopment', [WebsiteController::class, 'WebDevelopment'])->name('WebDevelopmentService');
Route::get('/digitalmarketing', [WebsiteController::class, 'digitalmarketing'])->name('DigitalDevelopmentService');
Route::get('/MobileDevelopmentService', [WebsiteController::class, 'MobileDevelopmentService'])->name('MobileDevelopmentService');
Route::get('/WebDesignService', [WebsiteController::class, 'WebDesignService'])->name('WebDesignService');
Route::get('/Domainservice', [WebsiteController::class, 'Domainservice'])->name('Domainservice');
Route::get('/webmaintenance', [WebsiteController::class, 'webmaintenance'])->name('webmaintenance');

// Route::get('/', function () {
//     return view('website.pages.home');
// })->name('home');

// Route::get('/about', function () {
//     return view('website.pages.aboutus');
// })->name('aboutus');
// Route::get('/about', function () {
//     return view('website.pages.service');
// })->name('service');

// Route::get('/mobileapp', function () {
//     return view('website.pages.mobilaapp');
// })->name('mobileapp');

// Route::get('/graphic', function () {
//     return view('website.pages.graphic');
// })->name('graphic');

// Route::get('/webdev', function () {
//     return view('website.pages.web');
// })->name('webdev');

// Route::get('/d-marketing', function () {
//     return view('website.pages.digital');
// })->name('d-marketing');
// Route::get('/uiux', function () {
//     return view('website.pages.ui');
// })->name('uiux');

// Route::get('/qa', function () {
//     return view('website.pages.qaengineer');
// })->name('qa');

// Route::get('/courses', function () {
//     return view('website.pages.allcourse');
// })->name('courses');
// Route::get('/laravel', function () {
//     return view('website.pages.laravel');
// })->name('laravel');

// Route::get('/account', function () {
//     return view('website.pages.accounting');
// })->name('account');

// Route::get('/clients', function () {
//     return view('website.pages.clients');
// })->name('clients');

// Route::get('/blogs', function () {
//     return view('website.pages.blogs');
// })->name('blogs');


// Route::get('/MobileDevelopmentService', function () {
//     return view('website.pages.appdevelopment');
// })->name('MobileDevelopmentService');


// Route::get('/WebDevelopmentService', function () {
//     return view('website.pages.webdevelopment');
// })->name('WebDevelopmentService');

// Route::get('/DigitalDevelopmentService', function () {
//     return view('website.pages.digitalmarketing');
// })->name('DigitalDevelopmentService');

// Route::get('/WebDesignService', function () {
//     return view('website.pages.webdesign');
// })->name('WebDesignService');

// Route::get('/DomainService', function () {
//     return view('website.pages.domain');
// })->name('Domainservice');


// Route::get('/webmaintenance', function () {
//     return view('website.pages.webmaintenance');
// })->name('webmaintenance');
