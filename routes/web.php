<?php

use App\Http\Controllers\DevisionController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["title"=>"Main page"]);
})->name('welcome');

Route::get('employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/create', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/update/{employees}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/update/{employees}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('employee/{employees}', [EmployeeController::class, 'delete'])->name('employee.delete');

Route::get('devision', [DevisionController::class, 'index'])->name('devision');
Route::get('devision/create', [DevisionController::class, 'create'])->name('devision.create');
Route::post('devision/create', [DevisionController::class, 'store'])->name('devision.store');
Route::put('devision', [DevisionController::class, 'devisionChance'])->name('devision.chance');