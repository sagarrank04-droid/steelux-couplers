<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes - ORIN Mechanical Rebar Couplers (Steelux Industries)
| Multi-Page Architecture with Blade Views & Responsive Design
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// Multi-Pages
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/advantages', [PageController::class, 'advantages'])->name('advantages');
Route::get('/machinery-specs', [PageController::class, 'machinery'])->name('machinery');
Route::get('/calculator', [PageController::class, 'calculator'])->name('calculator');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Inquiry Submission Handler
Route::post('/contact/inquiry', [InquiryController::class, 'submit'])->name('inquiry.submit');

// Clear All Cache & Optimize Commands
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('clear-compiled');
    return 'All cache and views cleared successfully!';
})->name('optimize.clear');

