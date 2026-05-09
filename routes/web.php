<?php

use Illuminate\Support\Facades\Route;
use App\Models\Notification;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    $notifications = \App\Models\Notification::latest()->get();
    return view('dashboard', compact('notifications'));
})->name('dashboard');