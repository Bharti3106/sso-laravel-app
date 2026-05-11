<?php

use App\Http\Controllers\GoogleController;

Route::get('/auth/google', [GoogleController::class, 'redirect']);

Route::get('/auth/google/callback', [GoogleController::class, 'callback']);

Route::get('/logout', [GoogleController::class, 'logout']);

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {

    if (!session('user')) {
        return redirect('/');
    }

    return view('dashboard');

});
