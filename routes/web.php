<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashController::class, 'dashboard']);

Route::view('custom_login', 'admin.auth.login')->name('custom_login');

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // User Routes
    Route::get('/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');
    // Voters Routes
    Route::post('/add_voter', [VoterController::class, 'add_voter'])->name('add_voter');
    Route::get('vote/see_voter', [VoterController::class, 'see_voters'])->name('vote.see_voter');
    Route::post('/voter_delete/{id}', [VoterController::class, 'voter_delete'])->name('voter_delete');
    // Vote Routes
    Route::post('/create_vote', [VoterController::class, 'create_vote'])->name('create_vote');
    Route::get('see_votes', [VoterController::class, 'see_votes'])->name('see_votes');
    Route::get('/view_vote/{id}', [VoterController::class, 'view_vote'])->name('view_vote');
    Route::get('/delete_vote/{id}', [VoterController::class, 'delete_vote'])->name('delete_vote');
    // Slot Routes
    Route::get('/slot', [VoterController::class, 'slot'])->name('slot');
    Route::post('/bind_slot', [VoterController::class, 'bind_slot'])->name('bind_slot');
    Route::get('/unbind_slot/{id}', [VoterController::class, 'unbind_slot'])->name('unbind_slot');


    Route::view('custom_register', 'admin.auth.register')->name('custom_register');
    Route::view('vote/create_voter', 'admin.vote.create_voter')->name('vote.create_voter');
    Route::view('vote/create_vote', 'admin.vote.create_vote')->name('vote.create_vote');
    Route::view('vote/see_vote', 'admin.vote.see_vote')->name('vote.see_vote');
    Route::view('vote/view_vote', 'admin.vote.view_vote')->name('vote.view_vote');
    Route::view('vote/history', 'admin.vote.history')->name('history');
});

require __DIR__.'/auth.php';
