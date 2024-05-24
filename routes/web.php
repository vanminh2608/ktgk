<?php

use App\Http\Controllers\HelloWorldController;

Route::get('/helloWorld', [HelloWorldController::class, 'index']);