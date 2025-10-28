<?php

use App\Http\Controllers\TrainsTabController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrainsTabController::class, 'index']);