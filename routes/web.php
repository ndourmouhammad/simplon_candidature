<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatureController;

Route::get('/dashboard', [CandidatureController::class, 'dashboard'])->name('dashboard');

