<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardSubmitController;
use App\Http\Controllers\DashboardAssessmentController;
use App\Http\Controllers\DashboardTrackingController;
use App\Http\Controllers\DashboardOnboardingController;

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


Route::get('/', function(){return view('dashboard.index');});
Route::get('/dashboard', function(){return view('dashboard.index');});
Route::get('/dashboard/submit', function(){return view('dashboard.submit.index');});
Route::get('/dashboard/tracking', function(){return view('dashboard.tracking.index');});
Route::get('/dashboard/assessment', function(){return view('dashboard.assessment.index');});
Route::get('/dashboard/onboarding', function(){return view('dashboard.onboarding.index');});
//Route::resource('/dashboard/submit', DashboardSubmitController ::class)->middleware('auth');
//Route::resource('/dashboard/onboarding', DashboardOnboardingController ::class)->middleware('auth');
//Route::resource('/dashboard/tracking', DashboardTrackingController ::class)->middleware('auth');
//Route::resource('/dashboard/assessment', DashboardAssessmentController ::class)->middleware('auth');