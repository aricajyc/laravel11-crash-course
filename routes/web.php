<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome'); //Route::get('/', [CONTROLLER-NAME::class, 'METHOD'])->name('PUT NAME TO IT - GOOD PRACTISE');
