<?php

use App\Http\Controllers\ParentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', [HomeController::class, 'index']);



Route::get('/dashboard', [UserController::class, 'dashbaord'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/addusers', [UserController::class, 'add'])->name('adduser');
    Route::put('/storeuser', [UserController::class, 'store'])->name('storeuser');

    Route::get('/edituser/{id}', [UserController::class, 'edit'])->name('edituser');
    Route::put('/updateuser/{id}', [UserController::class, 'update'])->name('updateuser');


    Route::get('/assignswimmer', [UserController::class, 'assignswimmer'])->name('assignswimmer');
    Route::post('/assignswimmersubmit', [UserController::class, 'assignswimmersubmit'])->name('assignswimmersubmit');

    Route::get('/parent', [ParentController::class, 'index'])->name('parent');
    Route::post('/addchild', [ParentController::class, 'addchild'])->name('addchild');

    Route::get('/removechild/{id}', [ParentController::class, 'destroy'])->name('removechild');
    Route::delete('/removechild/{id}/delete', [ParentController::class, 'delete'])->name('deletechild');

    Route::get('/swimmerVerification', [UserController::class, 'swimmerVerification'])->name('swimmerVerification');
    Route::get('/swimmerVerification/{id}', [UserController::class, 'swimmerVerification'])->name('postswimmerVerification');

    Route::get('/coachVerification', [UserController::class, 'coachVerification'])->name('coachVerification');
    Route::get('/coachVerification/{id}', [UserController::class, 'coachVerification'])->name('postcoachVerification');


    Route::get('/coach', [CoachController::class, 'index'])->name('coach');

    Route::get('/event', [CoachController::class, 'addevent'])->name('addevent');
    Route::post('/addNewEvent', [CoachController::class, 'addNewEvent'])->name('addNewEvent');


    Route::get('/removeEvent/{id}', [CoachController::class, 'removeEvent'])->name('removeEvent');
    Route::delete('/removeEvent/{id}/delete', [CoachController::class, 'deleteEvent'])->name('deleteEvent');


    Route::get('/performance', [CoachController::class, 'performance'])->name('performance');
    Route::get('/performance/{id}', [CoachController::class, 'performanceDetail'])->name('performanceDetail');
    Route::post('/addPerformance', [CoachController::class, 'addPerformance'])->name('addPerformance');


    Route::get('/verifyPerformance', [UserController::class, 'verifyPerformance'])->name('verifyPerformance');
    Route::get('/postVerifyPerformance/{id}', [UserController::class, 'postVerifyPerformance'])->name('postVerifyPerformance');



});

Route::get('/test', [TestController::class, 'index']);


Route::get('coach-login', [AuthenticatedSessionController::class, 'coach'])->name('coach-login');
Route::get('parent-login', [AuthenticatedSessionController::class, 'parent'])->name('parent-login');


require __DIR__.'/auth.php';
