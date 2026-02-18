<?php


use App\Http\Controllers\TodoController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TodoController::class, 'index'])->name('todo.index');


Route::resource('tasks', TaskController::class);
