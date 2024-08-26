<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('custom_login', 'admin.auth.login')->name('custom_login');
Route::view('custom_register', 'admin.auth.register')->name('custom_register');
Route::view('vote/see_voter', 'admin.vote.see_voter')->name('vote.see_voter');
Route::view('vote/create_voter', 'admin.vote.create_voter')->name('vote.create_voter');
Route::view('vote/create_vote', 'admin.vote.create_vote')->name('vote.create_vote');
Route::view('vote/see_vote', 'admin.vote.see_vote')->name('vote.see_vote');
Route::view('vote/view_vote', 'admin.vote.view_vote')->name('vote.view_vote');
Route::view('vote/history', 'admin.vote.history')->name('history');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
