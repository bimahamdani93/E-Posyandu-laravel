<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryVaccineController;
use App\Http\Controllers\MidwifeController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\VaccinationScheduleController;
use App\Http\Controllers\VaccinationRegistrationController;



Route::get('/', function () {
    return view('layouts.app');
});


Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');



Route::resources([
	'category-vaccines' => CategoryVaccineController::class,
	'midwives' => MidwifeController::class,
    'children' => ChildController::class,
    'vaccination-schedules' => VaccinationScheduleController::class,
    'vaccination-registrations' => VaccinationRegistrationController::class,
]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
