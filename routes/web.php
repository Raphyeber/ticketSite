<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminTicketController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\OrderController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/tickets/{ticket:slug}', [TicketController::class, 'show']);
Route::get('/tickets/{ticket:slug}/buy', [TicketController::class, 'buy']);
Route::post('tickets/{ticket:slug}/buy', [TicketController::class, 'order'])->middleware('auth');;

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/my-order', [OrderController::class, 'index'])->middleware('auth');
Route::post('/my-order/{order:id}/review', [OrderController::class, 'review'])->middleware('auth');

Route::get('/admin', [AdminHomeController::class, 'index'])->middleware('admin');
Route::resource('/admin/ticket', AdminTicketController::class)->except('show')->middleware('admin');
Route::resource('/admin/category', AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('/admin/user', AdminUserController::class)->except('show')->middleware('admin');

Route::get('/admin/review', [AdminReviewController::class, 'index'])->middleware('admin');
Route::delete('/admin/review/{review:id}', [AdminReviewController::class, 'destroy'])->middleware('admin');

Route::get('/admin/order', [AdminOrderController::class, 'index'])->middleware('admin');
Route::delete('/admin/order/{order:id}', [AdminOrderController::class, 'destroy'])->middleware('admin');

