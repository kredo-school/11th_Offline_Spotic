<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::patch('/home/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.update');

Route::get('/profile/{id}/show', [App\Http\Controllers\UserController::class, 'show'])->name('profile.show');

Route::get('/sponsor/post', function () {
    return view('sponsor.post');
})->name('sponsor.post');

Route::get('/sponsor/schedule', function () {
    return view('sponsor.schedule');
})->name('sponsor.schedule');

Route::get('/sponsor/event-page', function () {
    return view('sponsor.event-page');
});

Route::get('/sponsor/personal-information', function () {
    return view('sponsor.personal-information');
});

Route::get('/sponsor/particiants-list', function () {
    return view('sponsor.participant-list');
});

Route::get('/user/payment', function () {
    return view('User.payment');
});

Route::get('/admin/user-list', function () {
    return view('admin.user-list');
});

Route::get('/admin/sponsor-list', function () {
    return view('admin.sponsor-list');
});

Route::get('/admin/content-list', function () {
    return view('admin.content-list');
});
