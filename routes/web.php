<?php

use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\PromotionController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/villa-kalasan', [HomeController::class, 'villaKalasan'])->name('villa_kalasan');
Route::get('/projects', [HomeController::class, 'allProjects'])->name('projects');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('projects', ProjectController::class)->parameters([
        'projects' => 'id',
    ])->names('admin.projects');
})->name('projects');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('promotions', PromotionController::class)->parameters([
        'promotions' => 'id',
    ])->names('admin.promotions');
})->name('promotions');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('settings', SettingController::class)->parameters([
        'settings' => 'id',
    ])->names('admin.settings');
})->name('settings');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class)->parameters([
        'users' => 'id',
    ])->names('admin.users');
})->name('users');

require __DIR__ . '/auth.php';
