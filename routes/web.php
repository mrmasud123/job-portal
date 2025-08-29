<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Middleware\JWTAuthMiddleware;
use Illuminate\Support\Facades\Route;



Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('dashboard');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('logout');

// Jobs resource
Route::get('/jobs', [JobsController::class, 'index'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.index');

Route::get('/jobs/create', [JobsController::class, 'create'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.create');

Route::post('/jobs', [JobsController::class, 'store'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.store');

Route::get('/jobs/{job}', [JobsController::class, 'show'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.show');

Route::get('/jobs/{job}/edit', [JobsController::class, 'edit'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.edit');

Route::put('/jobs/{job}', [JobsController::class, 'update'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.update');

Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.destroy');

// Job apply
Route::post('/jobs/{job}/apply', [JobsController::class, 'apply'])
    ->middleware(JWTAuthMiddleware::class)
    ->name('jobs.apply');

Route::resource('/roles', RoleController::class)->middleware(JWTAuthMiddleware::class);
Route::resource('/permissions', PermissionController::class)->middleware(JWTAuthMiddleware::class);
Route::resource('/users', UserController::class)->middleware(JWTAuthMiddleware::class);

//////FrontEnd


Route::get('/', [FrontController::class, 'index'])->name('front.index');