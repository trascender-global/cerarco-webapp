<?php

use App\Http\Controllers\Others\Auth\ResetPasswordController;

Route::get('/password/reset/{token}/{email}' , [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');
