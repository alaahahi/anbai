<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;

use App\Http\Controllers\Controller;


Route::post('/change-locale/{locale}', [LocaleController::class, 'changeLocale'])->name('changeLocale');


Route::get('/', [ContactController::class, 'home'])->name('/');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('add', [Controller::class, 'index'])->name('add');

Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::get('/service/{id}/show', [ServiceController::class, 'show'])->name('service-details');

Route::get('team', [TeamController::class, 'index'])->name('team');
Route::get('/team/{id}/show', [TeamController::class, 'show'])->name('team-details');

Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/project/{id}/show', [ProjectController::class, 'show'])->name('project-details');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('message', [ContactController::class, 'message'])->name('message');
Route::post('maillist', [ContactController::class, 'maillist'])->name('maillist');
Route::get('trems', [ContactController::class, 'terms'])->name('trems');
Route::get('privacy-policy', [ContactController::class, 'policy'])->name('privacy-policy');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}/show', [BlogController::class, 'show'])->name('post-details');
Route::post('/comments', [BlogController::class, 'comments'])->name('comments');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}/show', [BlogController::class, 'show'])->name('post-details');

Route::get('careerss', [CareerController::class, 'index'])->name('careerss');
Route::get('/applicant/{id}/show', [CareerController::class, 'applicant'])->name('applicant');
Route::post('/applican-store', [CareerController::class, 'store'])->name('applican-store');



Route::get('/careers',  [PagesController::class, 'careers'])->name('careers');
Route::get('/careers_details',  [PagesController::class, 'careers_details'])->name('careers_details');
Route::get('/contact',  [PagesController::class, 'contact'])->name('contact');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });
