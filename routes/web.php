<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[TaskController::class,'index'])->name('home');
Route::post('/todo-new',[TaskController::class,'create'])->name('todo-new');
Route::get('/task.index',[TaskController::class,'index'])->name('task.index');
Route::get('/task.manage',[TaskController::class,'manage'])->name('task.manage');
Route::get('/todo.edit/{id}',[TaskController::class,'edit'])->name('todo.edit');
Route::post('/todo.update/{id}',[TaskController::class,'update'])->name('todo.update');
Route::get('/todo.delete/{id}',[TaskController::class,'delete'])->name('todo.delete');
