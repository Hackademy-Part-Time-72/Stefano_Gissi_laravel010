<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Rotte esistenti
Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::resource('tasks', TaskController::class);

// Nuove rotte CRUD per Category e Product
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);