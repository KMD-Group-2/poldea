<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ReportManagementController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
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

        // Staff Routes
        Route::get('staff',[StaffController::class,'index'])->name('staff.index');
        Route::post('staff',[StaffController::class,'store'])->name('staff.store');
        Route::post('staff/{staff}',[StaffController::class,'update'])->name('staff.update');
        Route::delete('staff/{staff}',[StaffController::class,'destroy'])->name('staff.destroy');
        Route::post('staff/mass/destroy',[StaffController::class,'massDestroy'])->name('staff.massDestroy');

        // User Routes
        Route::get('user',[UserController::class,'index'])->name('user.index');
        Route::post('user',[UserController::class,'store'])->name('user.store');
        Route::put('user/{user}',[UserController::class,'update'])->name('user.update');
        Route::delete('user/{user}',[UserController::class,'destroy'])->name('user.destroy');
        Route::post('user/mass/destroy',[UserController::class,'massDestroy'])->name('user.massDestroy');

        Route::get('academic-year',[AcademicYearController::class,'index'])->name('academic-year.index');
        Route::get('admin-idea-report',[ReportManagementController::class,'adminReport'])->name('report');


        // Category Routes
        Route::get('category',[CategoryController::class,'index'])->name('category.index');
        Route::post('category',[CategoryController::class,'store'])->name('category.store');
        Route::put('category/{category}',[CategoryController::class,'update'])->name('category.update');
        Route::delete('category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
        Route::post('category/mass/destroy',[CategoryController::class,'massDestroy'])->name('category.massDestroy');
    });

    Route::as('qa_m.')->group(function(){
        Route::get('/QA-Manager-dashboard',[LandingController::class, 'QAManagerDashboard'])->name('dashboard');
    });

    Route::as('qa_c.')->group(function(){
        Route::get('/QA-Coordinator-dashboard',[LandingController::class, 'QACoordinatorDashboard'])->name('dashboard');
    });

    Route::as('staff.')->group(function(){
        Route::get('/Ideas',[LandingController::class, 'StaffDashboard'])->name('dashboard');
        Route::get('add-information/{idea?}',[IdeaController::class,'addInformationView'])->name('idea.add-info');
        Route::get('upload-files/{idea}',[IdeaController::class,'uploadFilesView'])->name('idea.upload-file');
        Route::get('preview-idea/{idea}',[IdeaController::class,'previewIdeaView'])->name('idea.preview-idea');
        Route::post('add-information',[IdeaController::class, 'storeInfo'])->name('idea.add-info.store');
        Route::post('upload-files',[IdeaController::class, 'uploadFiles'])->name('idea.upload-file.store');
    });

    Route::get('idea/{idea}',[IdeaController::class, 'show']);
});

require __DIR__ . '/auth.php';
