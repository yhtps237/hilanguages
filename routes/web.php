<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::multilingual('/', [PageController::class, 'index'])->name('index');
Route::multilingual('/about', [PageController::class, 'about'])->name('about');
Route::multilingual('/faq', [PageController::class, 'faq'])->name('faq');
Route::multilingual('/our-team', [PageController::class, 'ourTeam'])->name('ourTeam');
Route::multilingual('/our-team/{slug}', [PageController::class, 'ourTeamDetail'])->name('ourTeamDetail');
Route::multilingual('/blog', [PageController::class, 'blog'])->name('blog');
Route::multilingual('/blog/{slug}', [PageController::class, 'blogDetail'])->name('blogDetail');
Route::multilingual('/courses', [PageController::class, 'course'])->name('course');
Route::multilingual('/courses/{slug}', [PageController::class, 'courseDetail'])->name('courseDetail');
Route::multilingual('/photo-gallery', [PageController::class, 'photoGallery'])->name('photoGallery');
Route::multilingual('/video-gallery', [PageController::class, 'videoGallery'])->name('videoGallery');
Route::multilingual('/contact', [PageController::class, 'contact'])->name('contact');
Route::multilingual('/career', [PageController::class, 'career'])->name('career');
Route::multilingual('/students', [PageController::class, 'students'])->name('students');
