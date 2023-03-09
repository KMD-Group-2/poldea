<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:Admin|QA Manager|QA Coordinator'])->group(function(){
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
});
