<?php

use Illuminate\Support\Facades\Route;
use Kmlpandey77\Redirection\Http\Controllers\RedirectionController;

Route::resource(config('redirection.route_link'), RedirectionController::class);
