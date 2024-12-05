<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->name('index');
Route::view('/about', 'landing.about')->name('landing.about');
Route::view('/services', 'landing.services')->name('landing.services');
Route::view('/blog', 'landing.blog')->name('landing.blog');
Route::view('/contact-us', 'landing.contact')->name('landing.contact');

Route::get('/testing/users', [UserController::class, 'index'])->name('user.index');
Route::get('/testing/new-user', [UserController::class, 'create'])->name('user.create');

Route::get('/testing/notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/testing/new-note', [NoteController::class, 'create'])->name('note.create');
Route::post('/testing/new-note', [NoteController::class, 'store'])->name('note.store');
Route::get('/testing/note/{id}', [NoteController::class, 'show'])->name('note.show');
Route::get('/testing/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/testing/note/{id}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/testing/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

