<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Landing\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/sobre-mi', [PageController::class, 'about'])->name('landing.about');
Route::view('/services', 'landing.services')->name('landing.services');
Route::view('/projects', 'landing.projects')->name('landing.projects');
Route::view('/blog', 'landing.blog')->name('landing.blog');
Route::view('/contact-us', 'landing.contact')->name('landing.contact');

Route::get('/admin/users', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/new-user', [UserController::class, 'create'])->name('user.create');

Route::get('/admin/notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/admin/new-note', [NoteController::class, 'create'])->name('note.create');
Route::post('/admin/new-note', [NoteController::class, 'store'])->name('note.store');
Route::get('/admin/note/{id}', [NoteController::class, 'show'])->name('note.show');
Route::get('/admin/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/admin/note/{id}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/admin/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

