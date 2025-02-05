<?php

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'frontend']);
