<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AiMentorController;


/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

// Login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| CAREER
|--------------------------------------------------------------------------
*/

Route::get('/career', function () {
    return view('career.index');
})->name('career');

Route::get('/career/{id}', function ($id) {
    return view('career.detail', [
        'id' => $id
    ]);
})->name('career.detail');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');


    Route::get('/dashboard/assessment', function () {
        return view('dashboard.assessment');
    })->name('assessment');


    Route::get('/dashboard/roadmap', function () {
        return view('dashboard.roadmap');
    })->name('roadmap');


    Route::get('/dashboard/belajar', function () {
        return view('dashboard.belajar');
    })->name('belajar');


    Route::get('/dashboard/projects', function () {
        return view('dashboard.projects');
    })->name('projects');


    Route::get('/dashboard/certificate', function () {
        return view('dashboard.certificate');
    })->name('certificate');


    Route::get('/ai-mentor', function () {
        return view('dashboard.ai-mentor');
    })->name('ai.mentor');


    Route::get('/dashboard/ai-mentor', function () {
        return view('dashboard.ai-mentor');
    })->name('dashboard.ai.mentor');


    Route::post('/ai-mentor/chat', [
        \App\Http\Controllers\AiMentorController::class,
        'chat'
    ])->name('ai.mentor.chat');

});

use App\Http\Controllers\SettingsController;

Route::middleware('auth')->group(function () {

    Route::get('/dashboard/pengaturan', function () {
        return view('dashboard.pengaturan');
    })->name('pengaturan');

    Route::put('/settings/profile', [SettingsController::class, 'updateProfile'])
        ->name('settings.profile');

    Route::put('/settings/password', [SettingsController::class, 'updatePassword'])
        ->name('settings.password');

    Route::delete('/settings/account', [SettingsController::class, 'deleteAccount'])
        ->name('settings.account.delete');

});

Route::get('/community', function () {
    return view('community');
})->name('community');