<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ReportManagementController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth'])->group(function(){
    Route::get('/home',[LandingController::class, 'index']);

    Route::as('admin.')->group(function(){
        Route::get('/admin-dashboard',[LandingController::class, 'adminDashboard'])->name('dashboard');
        Route::get('staff',[StaffController::class,'index'])->name('staff.index');
        Route::get('user',[UserController::class,'index'])->name('user.index');
        Route::post('user',[UserController::class,'store'])->name('user.store');
        Route::put('user/{user}',[UserController::class,'update'])->name('user.update');
        Route::delete('user/{user}',[UserController::class,'destroy'])->name('user.destroy');
        Route::post('user/mass-destroy',[UserController::class,'massDestroy'])->name('user.massDestroy');

        Route::get('academic-year',[AcademicYearController::class,'index'])->name('academic-year.index');
        Route::get('admin-idea-report',[ReportManagementController::class,'adminReport'])->name('report');
    });

    Route::as('qa_m.')->group(function(){
        Route::get('/QA-Manager-dashboard',[LandingController::class, 'QAManagerDashboard'])->name('dashboard');
    });

    Route::as('qa_c.')->group(function(){
        Route::get('/QA-Coordinator-dashboard',[LandingController::class, 'QACoordinatorDashboard'])->name('dashboard');
    });

    Route::as('staff.')->group(function(){
        Route::get('/Ideas',[LandingController::class, 'StaffDashboard'])->name('dashboard');
        Route::get('create-idea',[IdeaController::class,'create'])->name('idea.create');
    });
});

require __DIR__ . '/auth.php';
