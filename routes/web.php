<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('welcome');});
   


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/about', function () {
    return redirect ('work');
})->name('about');

//redirect ke dashboard page boss...
Route::middleware(['auth:sanctum', 'verified'])->get('/create', function () {
    return view ('todo.create');
})->name('create');

// membuat task baru tentunya
Route::get('/dashboard', [TodoController::class,'index'])->name('dashboard');
Route::post('/create', [TodoController::class,'store'])->name('todo.create');

//tampilkan tasknya dong